@extends('layouts.app')

@section('content')
    <x-page-hero
        eyebrow="Our Work"
        title="Projects that move businesses forward"
        subtitle="A selection of platforms, products, and transformations we have delivered for teams across industries."
    />

    <section class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                eyebrow="Featured Work"
                title="Recent engagements"
                lead="Explore the outcomes, technology, and product experiences behind each build."
            />

            <div class="row g-4">
                @foreach ($projects as $index => $project)
                    <div class="col-md-6">
                        <a href="{{ route('projects.show', $project['slug']) }}"
                            class="project-card reveal {{ $index > 0 ? 'reveal-delay-' . min($index, 4) : '' }} d-block text-decoration-none h-100">
                            <div class="project-card__media about-media about-media--landscape">
                                <img src="{{ asset($project['cover']) }}" alt="{{ $project['title'] }}" loading="lazy"
                                    class="about-media__image">
                                <div class="project-card__overlay" aria-hidden="true"></div>
                            </div>
                            <div class="project-card__body home-value-card rounded-4 p-4">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                                    <span class="project-card__category">{{ $project['category'] }}</span>
                                    <span class="project-card__year">{{ $project['year'] }}</span>
                                </div>
                                <h3 class="fw-bold text-theme mb-2">{{ $project['title'] }}</h3>
                                <p class="small text-theme-muted lh-base mb-3">{{ $project['summary'] }}</p>
                                <div class="project-tech-list">
                                    @foreach (array_slice($project['tech_stack'], 0, 4) as $tech)
                                        <span class="project-tech-pill">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <span class="project-card__link mt-4">
                                    View case study
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
