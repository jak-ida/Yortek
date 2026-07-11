@extends('layouts.app')

@section('content')
    <x-page-hero hero-class="project-show-hero">
        <a href="{{ route('projects.index') }}" class="project-show-back hero-enter d-inline-flex align-items-center gap-2 text-decoration-none mb-4">
            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
            </svg>
            All projects
        </a>

        <div class="project-show-hero__meta hero-enter hero-enter-delay-1 d-flex flex-wrap gap-2 mb-4">
            <span class="project-hero-pill">{{ $project['category'] }}</span>
            <span class="project-hero-pill">{{ $project['year'] }}</span>
            <span class="project-hero-pill">{{ $project['client'] }}</span>
        </div>

        <h1 class="hero-enter hero-enter-delay-1 about-hero-title page-hero__title--wide fw-bold mb-4">
            {{ $project['title'] }}
        </h1>

        <p class="hero-enter hero-enter-delay-2 home-hero-subtitle page-hero__subtitle mb-0 lh-base">
            {{ $project['summary'] }}
        </p>
    </x-page-hero>

    <section class="position-relative section-surface home-why-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-7 reveal">
                    <p class="section-eyebrow text-primary mb-2">Overview</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">The challenge and the outcome</h2>
                    <p class="text-theme-muted lh-base mb-0">{{ $project['description'] }}</p>
                </div>

                <div class="col-lg-5 reveal reveal-delay-1">
                    <div class="home-value-card rounded-4 p-4 h-100">
                        <h3 class="fw-bold text-theme mb-3 h5">Key results</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-4">
                            @foreach ($project['highlights'] as $highlight)
                                <li class="d-flex align-items-start gap-3">
                                    <span class="project-highlight-dot" aria-hidden="true"></span>
                                    <span class="text-theme-muted small lh-base">{{ $highlight }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <h3 class="fw-bold text-theme mb-3 h6">Services delivered</h3>
                        <div class="project-tech-list">
                            @foreach ($project['services'] as $service)
                                <span class="project-tech-pill project-tech-pill--soft">{{ $service }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <div class="reveal mb-5 project-gallery-header d-flex flex-wrap align-items-end justify-content-between gap-3">
                <div class="project-gallery-header__intro">
                    <p class="section-eyebrow text-primary mb-2">Product Screens</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-0">Inside the build</h2>
                </div>
                <div class="project-gallery-tabs reveal reveal-delay-1" role="tablist" aria-label="Project screens">
                    @foreach ($project['gallery'] as $index => $screen)
                        <button type="button"
                            @class(['project-gallery-tabs__btn', 'is-active' => $index === 0])
                            role="tab"
                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}"
                            data-gallery-tab="{{ $index }}">
                            {{ $screen['caption'] }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="project-gallery reveal">
                @foreach ($project['gallery'] as $index => $screen)
                    <figure @class(['project-frame', 'is-active' => $index === 0]) data-gallery-panel="{{ $index }}">
                        <div class="project-frame__chrome" aria-hidden="true">
                            <span class="project-frame__dot project-frame__dot--red"></span>
                            <span class="project-frame__dot project-frame__dot--amber"></span>
                            <span class="project-frame__dot project-frame__dot--green"></span>
                            <span class="project-frame__url">{{ Str::slug($project['title']) }}.app/{{ Str::slug($screen['caption']) }}</span>
                        </div>
                        <img src="{{ asset($screen['src']) }}" alt="{{ $screen['caption'] }} — {{ $project['title'] }}" loading="lazy"
                            class="project-frame__image">
                        <figcaption class="project-frame__caption">{{ $screen['caption'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    <section class="position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Technology</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">Stack and tooling</h2>
                    <p class="section-lead mb-0">
                        The platforms, frameworks, and infrastructure selected to deliver performance, maintainability, and scale.
                    </p>
                </div>

                <div class="col-lg-7 reveal reveal-delay-1">
                    <div class="project-stack-grid">
                        @foreach ($project['tech_stack'] as $index => $tech)
                            <div class="project-stack-card home-value-card rounded-4 p-4">
                                <span class="project-stack-card__index">0{{ $index + 1 }}</span>
                                <span class="project-stack-card__name fw-bold text-theme">{{ $tech }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="project-show-nav reveal mt-5 pt-4 border-top border-secondary border-opacity-25">
                <div class="row g-3">
                    <div class="col-md-6">
                        @if ($previousProject)
                            <a href="{{ route('projects.show', $previousProject['slug']) }}" class="project-show-nav__link">
                                <span class="project-show-nav__label">Previous project</span>
                                <span class="project-show-nav__title">{{ $previousProject['title'] }}</span>
                            </a>
                        @endif
                    </div>
                    <div class="col-md-6 text-md-end">
                        @if ($nextProject)
                            <a href="{{ route('projects.show', $nextProject['slug']) }}" class="project-show-nav__link project-show-nav__link--next ms-md-auto">
                                <span class="project-show-nav__label">Next project</span>
                                <span class="project-show-nav__title">{{ $nextProject['title'] }}</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
