<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Seo
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $canonical,
        public readonly string $image,
        public readonly string $robots = 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
        public readonly string $ogType = 'website',
        public readonly ?string $publishedTime = null,
        public readonly ?string $modifiedTime = null,
        public readonly array $breadcrumbs = [],
        public readonly array $extraJsonLd = [],
    ) {}

    public static function resolve(?array $overrides = null): self
    {
        if ($overrides !== null) {
            return self::fromArray($overrides);
        }

        $route = Route::currentRouteName();

        if ($route === 'projects.show') {
            $project = request()->route('slug');
            $project = Projects::find($project);

            if ($project !== null) {
                return self::forProject($project);
            }
        }

        $pages = config('seo.pages', []);
        $page = $pages[$route] ?? [];

        return self::fromArray([
            'title' => $page['title'] ?? config('app.name'),
            'description' => $page['description'] ?? config('seo.organization.description'),
            'canonical' => URL::current(),
            'image' => $page['image'] ?? config('seo.default_image'),
            'og_type' => $page['og_type'] ?? 'website',
            'breadcrumbs' => self::breadcrumbsForRoute($route),
            'extra_json_ld' => self::extraJsonLdForRoute($route),
        ]);
    }

    public static function forProject(array $project): self
    {
        $description = $project['summary'] ?? $project['description'];

        return self::fromArray([
            'title' => $project['title'],
            'description' => $description,
            'canonical' => route('projects.show', $project['slug']),
            'image' => $project['cover'] ?? config('seo.default_image'),
            'og_type' => 'article',
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => route('home')],
                ['name' => 'Projects', 'url' => route('projects.index')],
                ['name' => $project['title'], 'url' => route('projects.show', $project['slug'])],
            ],
            'extra_json_ld' => [
                [
                    '@type' => 'CreativeWork',
                    '@id' => route('projects.show', $project['slug']).'#project',
                    'name' => $project['title'],
                    'description' => $project['description'],
                    'image' => asset($project['cover'] ?? config('seo.default_image')),
                    'datePublished' => ($project['year'] ?? date('Y')).'-01-01',
                    'creator' => self::organizationNode(),
                    'keywords' => implode(', ', $project['tech_stack'] ?? []),
                    'genre' => $project['category'] ?? 'Technology',
                ],
            ],
        ]);
    }

    public static function fromArray(array $data): self
    {
        $brand = config('seo.organization.name', config('app.name'));
        $separator = config('seo.title_separator', ' | ');
        $title = $data['title'] ?? $brand;

        if (! str_contains($title, $brand)) {
            $title = $title.$separator.$brand;
        }

        return new self(
            title: $title,
            description: self::truncate($data['description'] ?? '', 160),
            canonical: $data['canonical'] ?? URL::current(),
            image: asset($data['image'] ?? config('seo.default_image')),
            robots: $data['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
            ogType: $data['og_type'] ?? 'website',
            publishedTime: $data['published_time'] ?? null,
            modifiedTime: $data['modified_time'] ?? null,
            breadcrumbs: $data['breadcrumbs'] ?? [],
            extraJsonLd: $data['extra_json_ld'] ?? [],
        );
    }

    public function fullTitle(): string
    {
        return $this->title;
    }

    public function jsonLdGraph(): array
    {
        $org = config('seo.organization');
        $siteUrl = config('app.url');

        $graph = [
            self::organizationNode(),
            [
                '@type' => 'WebSite',
                '@id' => $siteUrl.'/#website',
                'url' => $siteUrl,
                'name' => $org['name'],
                'description' => $org['description'],
                'publisher' => ['@id' => $siteUrl.'/#organization'],
                'inLanguage' => str_replace('_', '-', app()->getLocale()),
                'potentialAction' => [
                    '@type' => 'SearchAction',
                    'target' => [
                        '@type' => 'EntryPoint',
                        'urlTemplate' => $siteUrl.'/projects?q={search_term_string}',
                    ],
                    'query-input' => 'required name=search_term_string',
                ],
            ],
            [
                '@type' => 'WebPage',
                '@id' => $this->canonical.'#webpage',
                'url' => $this->canonical,
                'name' => $this->title,
                'description' => $this->description,
                'isPartOf' => ['@id' => $siteUrl.'/#website'],
                'about' => ['@id' => $siteUrl.'/#organization'],
                'inLanguage' => str_replace('_', '-', app()->getLocale()),
            ],
        ];

        if ($this->breadcrumbs !== []) {
            $graph[] = $this->breadcrumbListNode();
        }

        foreach ($this->extraJsonLd as $node) {
            $graph[] = $node;
        }

        return [
            '@context' => 'https://schema.org',
            '@graph' => $graph,
        ];
    }

    public static function organizationNode(): array
    {
        $org = config('seo.organization');
        $siteUrl = rtrim(config('app.url'), '/');
        $address = $org['address'] ?? [];

        $node = [
            '@type' => 'Organization',
            '@id' => $siteUrl.'/#organization',
            'name' => $org['name'],
            'url' => $siteUrl,
            'description' => $org['description'],
            'email' => $org['email'],
            'telephone' => $org['phone'],
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('favicon.svg'),
            ],
            'sameAs' => $org['same_as'] ?? [],
        ];

        if (! empty($address['street'])) {
            $node['address'] = [
                '@type' => 'PostalAddress',
                'streetAddress' => $address['street'],
                'addressLocality' => $address['locality'] ?? '',
                'addressRegion' => $address['region'] ?? '',
                'postalCode' => $address['postal_code'] ?? '',
                'addressCountry' => $address['country'] ?? '',
            ];
        }

        return $node;
    }

    protected function breadcrumbListNode(): array
    {
        $items = [];

        foreach ($this->breadcrumbs as $index => $crumb) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $crumb['name'],
                'item' => $crumb['url'],
            ];
        }

        return [
            '@type' => 'BreadcrumbList',
            '@id' => $this->canonical.'#breadcrumb',
            'itemListElement' => $items,
        ];
    }

    protected static function breadcrumbsForRoute(?string $route): array
    {
        $crumbs = [
            ['name' => 'Home', 'url' => route('home')],
        ];

        $map = [
            'about' => 'About',
            'services' => 'Services',
            'projects.index' => 'Projects',
            'contact' => 'Contact',
        ];

        if ($route && isset($map[$route])) {
            $crumbs[] = [
                'name' => $map[$route],
                'url' => route($route),
            ];
        }

        return count($crumbs) > 1 ? $crumbs : [];
    }

    protected static function truncate(string $text, int $limit): string
    {
        $text = trim(preg_replace('/\s+/', ' ', $text) ?? '');

        if (mb_strlen($text) <= $limit) {
            return $text;
        }

        return rtrim(mb_substr($text, 0, $limit - 1)).'…';
    }

    public static function sitemapUrls(): array
    {
        $urls = [
            ['loc' => route('home'), 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => route('about'), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('services'), 'changefreq' => 'monthly', 'priority' => '0.9'],
            ['loc' => route('projects.index'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => route('contact'), 'changefreq' => 'monthly', 'priority' => '0.8'],
        ];

        foreach (Projects::all() as $project) {
            $urls[] = [
                'loc' => route('projects.show', $project['slug']),
                'changefreq' => 'monthly',
                'priority' => '0.7',
                'lastmod' => ($project['year'] ?? date('Y')).'-06-01',
            ];
        }

        return $urls;
    }

    protected static function extraJsonLdForRoute(?string $route): array
    {
        return match ($route) {
            'services' => [self::servicesItemList()],
            'projects.index' => [self::projectsItemList()],
            default => [],
        };
    }

    protected static function servicesItemList(): array
    {
        $services = [
            'Web Development',
            'Mobile Apps',
            'Cloud Solutions',
            'UI/UX Design',
            'Data Analytics',
            'Support & Maintenance',
        ];

        $items = [];

        foreach ($services as $index => $name) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $name,
                'item' => route('services').'#'.str()->slug($name),
            ];
        }

        return [
            '@type' => 'ItemList',
            '@id' => route('services').'#services',
            'name' => 'Yortek Innovations Services',
            'itemListElement' => $items,
        ];
    }

    protected static function projectsItemList(): array
    {
        $items = [];

        foreach (Projects::all() as $index => $project) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $project['title'],
                'url' => route('projects.show', $project['slug']),
            ];
        }

        return [
            '@type' => 'ItemList',
            '@id' => route('projects.index').'#projects',
            'name' => 'Yortek Innovations Projects',
            'itemListElement' => $items,
        ];
    }
}
