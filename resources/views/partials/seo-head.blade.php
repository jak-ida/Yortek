@php
    /** @var \App\Support\Seo $seo */
    $locale = str_replace('_', '-', app()->getLocale());
    $ogLocale = str_replace('-', '_', $locale);
@endphp

<title>{{ $seo->fullTitle() }}</title>
<meta name="description" content="{{ $seo->description }}">
<meta name="robots" content="{{ $seo->robots }}">
<meta name="author" content="{{ config('seo.organization.name') }}">
<meta name="theme-color" content="#0f172a">
<meta name="color-scheme" content="light dark">
<meta name="format-detection" content="telephone=no">

<link rel="canonical" href="{{ $seo->canonical }}">
<link rel="alternate" hreflang="{{ $locale }}" href="{{ $seo->canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $seo->canonical }}">

<link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
<link rel="manifest" href="{{ asset('site.webmanifest') }}">

<meta property="og:locale" content="{{ $ogLocale }}">
<meta property="og:type" content="{{ $seo->ogType }}">
<meta property="og:site_name" content="{{ config('seo.organization.name') }}">
<meta property="og:title" content="{{ $seo->fullTitle() }}">
<meta property="og:description" content="{{ $seo->description }}">
<meta property="og:url" content="{{ $seo->canonical }}">
<meta property="og:image" content="{{ $seo->image }}">
<meta property="og:image:alt" content="{{ config('seo.organization.name') }} — {{ $seo->title }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ config('seo.twitter_site') }}">
<meta name="twitter:title" content="{{ $seo->fullTitle() }}">
<meta name="twitter:description" content="{{ $seo->description }}">
<meta name="twitter:image" content="{{ $seo->image }}">
<meta name="twitter:image:alt" content="{{ config('seo.organization.name') }} — {{ $seo->title }}">

@if ($seo->publishedTime)
    <meta property="article:published_time" content="{{ $seo->publishedTime }}">
@endif

@if ($seo->modifiedTime)
    <meta property="article:modified_time" content="{{ $seo->modifiedTime }}">
    <meta property="og:updated_time" content="{{ $seo->modifiedTime }}">
@endif

<script type="application/ld+json">
    {!! json_encode($seo->jsonLdGraph(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
