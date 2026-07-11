@extends('layouts.app')

@section('content')
    <div class="home-hero-scene position-relative text-white overflow-hidden" style="isolation: isolate;">
        <div class="home-hero-scene__backdrop pe-none" aria-hidden="true"
            style="background-image: url('{{ asset('images/hero-background.png') }}')">
            <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
        </div>

        <div class="pe-none position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;" aria-hidden="true">
            <div class="home-hero-orb home-hero-orb--teal-lg animate-pulse"></div>
            <div class="home-hero-orb home-hero-orb--blue animate-pulse" style="animation-delay: 1.2s;"></div>
            <div class="home-hero-orb home-hero-orb--teal-sm"></div>
        </div>

        <section class="home-hero position-relative" style="z-index: 10;">
            <div class="container-xl px-4 px-lg-5 py-5">
                <div class="text-start page-hero__content page-hero__content--wide">
                    <div class="hero-enter hero-pill mb-4">
                        <span class="hero-pill__dot" aria-hidden="true"></span>
                        Technology Partners
                    </div>

                    <h1 class="hero-enter hero-enter-delay-1 home-hero-title fw-bold mb-4">
                        Technology built to accelerate your
                        <span class="position-relative d-inline-block align-bottom home-hero-word-wrap">
                            <span id="hero-rotating-word-spacer" class="invisible d-inline-block text-nowrap"
                                aria-hidden="true">Momentum</span>
                            <span id="hero-rotating-word"
                                class="position-absolute top-0 start-0 text-nowrap"
                                data-words='["Growth", "Momentum", "Reach", "Impact"]' aria-live="polite">Growth</span>
                        </span>
                    </h1>

                    <p class="hero-enter hero-enter-delay-2 home-hero-subtitle page-hero__subtitle page-hero__subtitle--wide mb-4 lh-base">
                        Build bold. Scale smart.
                    </p>

                    <div class="hero-enter hero-enter-delay-3 d-flex flex-wrap gap-3">
                        <a href="{{ route('services') }}" class="btn-yortek btn-raise">
                            Our Services
                        </a>
                        <a href="{{ route('contact') }}" class="btn-yortek-outline btn-raise">
                            Schedule a Call
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="why" class="position-relative section-surface home-why-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-start">
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-1 rounded-4 p-4 h-100">
                                <div class="value-icon value-icon--blue">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="fw-bold text-theme mb-2">Innovation</h3>
                                <p class="small text-theme-muted lh-base mb-0">Modern stacks and forward-thinking solutions
                                    tailored to your goals.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-2 rounded-4 p-4 h-100">
                                <div class="value-icon value-icon--teal">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h3 class="fw-bold text-theme mb-2">Integrity</h3>
                                <p class="small text-theme-muted lh-base mb-0">Transparent communication and dependable delivery
                                    at every stage.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-3 rounded-4 p-4 h-100">
                                <div class="value-icon value-icon--indigo">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <h3 class="fw-bold text-theme mb-2">Excellence</h3>
                                <p class="small text-theme-muted lh-base mb-0">Rigorous quality standards from discovery through
                                    launch and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Why Yortek</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">We focus on more than just the product</h2>
                </div>
            </div>
        </div>
    </section>

    @php
        $projectShowcase = [
            ['src' => 'images/work-software-development.png', 'alt' => 'Custom software platform'],
            ['src' => 'images/work-it-consulting.png', 'alt' => 'Enterprise IT consulting'],
            ['src' => 'images/work-digital-transformation.png', 'alt' => 'Digital transformation initiative'],
            ['src' => 'images/work-software-development.png', 'alt' => 'Web application build'],
            ['src' => 'images/work-it-consulting.png', 'alt' => 'Cloud infrastructure strategy'],
            ['src' => 'images/work-digital-transformation.png', 'alt' => 'Operations modernization'],
            ['src' => 'images/work-digital-transformation.png', 'alt' => 'Product design system'],
            ['src' => 'images/work-software-development.png', 'alt' => 'Mobile app delivery'],
            ['src' => 'images/work-it-consulting.png', 'alt' => 'Technology roadmap planning'],
        ];

        $showcaseRows = [
            ['direction' => 'left', 'offset' => false, 'duration' => '52s', 'items' => array_slice($projectShowcase, 0, 6)],
            ['direction' => 'right', 'offset' => true, 'duration' => '58s', 'items' => array_slice($projectShowcase, 2, 6)],
            ['direction' => 'left', 'offset' => false, 'duration' => '48s', 'items' => array_slice($projectShowcase, 1, 6)],
        ];
    @endphp

    <section id="services" class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                eyebrow="Our Expertise"
                title="Services tailored to your needs"
                lead="Anything you need to build, modernize, or scale your business."
            />
        </div>

        <div class="home-services-marquee d-flex flex-column gap-3 gap-sm-4">
            @foreach ($showcaseRows as $row)
                <div class="home-services-marquee__viewport">
                    <div @class([
                        'home-services-marquee__row',
                        'home-services-marquee__row--right' => $row['direction'] === 'right',
                        'home-services-marquee__row--offset' => $row['offset'],
                    ]) style="--marquee-duration: {{ $row['duration'] }}">
                        @foreach (array_merge($row['items'], $row['items']) as $project)
                            <div class="home-services-marquee__card">
                                <img src="{{ asset($project['src']) }}" alt="{{ $project['alt'] }}" loading="lazy"
                                    class="home-services-marquee__card-image">
                                <div class="home-services-marquee__card-overlay" aria-hidden="true"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container-xl px-4 px-lg-5 mt-5">
            <div class="reveal">
                <a href="{{ route('services') }}" class="btn-yortek-ghost btn-raise">
                    View all services
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="how" class="position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                class="mb-5"
                eyebrow="How We Work"
                title="A clear path from idea to impact"
            />

            <div class="home-process-flow">
                <div class="home-process-flow__step reveal reveal-delay-1">
                    <div class="home-process-step text-center text-lg-start">
                        <div class="home-process-badge home-process-badge--blue mx-auto ms-lg-0">01</div>
                        <h3 class="fw-bold text-theme mb-2">Discover</h3>
                        <p class="small text-theme-muted lh-base mb-0">We learn your business, users, and goals to define
                            the right solution.</p>
                    </div>
                </div>

                <div class="home-process-flow__arrow reveal reveal-delay-1" aria-hidden="true">
                    <svg class="home-process-flow__arrow-icon" viewBox="0 0 28 12" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 6h20M17 2.5l5.5 3.5-5.5 3.5" />
                    </svg>
                </div>

                <div class="home-process-flow__step reveal reveal-delay-2">
                    <div class="home-process-step text-center text-lg-start">
                        <div class="home-process-badge home-process-badge--cyan mx-auto ms-lg-0">02</div>
                        <h3 class="fw-bold text-theme mb-2">Design</h3>
                        <p class="small text-theme-muted lh-base mb-0">We craft intuitive experiences and a technical
                            architecture built to scale.</p>
                    </div>
                </div>

                <div class="home-process-flow__arrow reveal reveal-delay-2" aria-hidden="true">
                    <svg class="home-process-flow__arrow-icon" viewBox="0 0 28 12" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 6h20M17 2.5l5.5 3.5-5.5 3.5" />
                    </svg>
                </div>

                <div class="home-process-flow__step reveal reveal-delay-3">
                    <div class="home-process-step text-center text-lg-start">
                        <div class="home-process-badge home-process-badge--indigo mx-auto ms-lg-0">03</div>
                        <h3 class="fw-bold text-theme mb-2">Build</h3>
                        <p class="small text-theme-muted lh-base mb-0">Agile development with regular updates so you stay
                            informed and in control.</p>
                    </div>
                </div>

                <div class="home-process-flow__arrow reveal reveal-delay-3" aria-hidden="true">
                    <svg class="home-process-flow__arrow-icon" viewBox="0 0 28 12" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1 6h20M17 2.5l5.5 3.5-5.5 3.5" />
                    </svg>
                </div>

                <div class="home-process-flow__step reveal reveal-delay-4">
                    <div class="home-process-step text-center text-lg-start">
                        <div class="home-process-badge home-process-badge--teal mx-auto ms-lg-0">04</div>
                        <h3 class="fw-bold text-theme mb-2">Launch &amp; Grow</h3>
                        <p class="small text-theme-muted lh-base mb-0">We deploy, optimize, and support your product as your
                            needs evolve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                eyebrow="Client Stories"
                title="Trusted by teams who expect more"
            />

            <div class="row g-4">
                <div class="col-md-4">
                    <blockquote class="home-quote-card reveal reveal-delay-1 rounded-4 p-4 p-sm-5 mb-0 h-100">
                        <p class="text-theme-muted lh-base mb-4">&ldquo;Yortek transformed our outdated systems into a
                            streamlined platform our team actually enjoys using.&rdquo;</p>
                        <footer class="d-flex align-items-center gap-3">
                            <div class="testimonial-avatar testimonial-avatar--blue">AK</div>
                            <div>
                                <cite class="fst-normal fw-semibold text-theme small">Amina K.</cite>
                                <p class="text-theme-muted text-meta mb-0">Operations Director</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>

                <div class="col-md-4">
                    <blockquote class="home-quote-card reveal reveal-delay-2 rounded-4 p-4 p-sm-5 mb-0 h-100">
                        <p class="text-theme-muted lh-base mb-4">&ldquo;Their consulting helped us choose the right tech
                            stack and cut our launch timeline in half.&rdquo;</p>
                        <footer class="d-flex align-items-center gap-3">
                            <div class="testimonial-avatar testimonial-avatar--teal">JR</div>
                            <div>
                                <cite class="fst-normal fw-semibold text-theme small">James R.</cite>
                                <p class="text-theme-muted text-meta mb-0">Founder, SaaS Startup</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>

                <div class="col-md-4">
                    <blockquote class="home-quote-card reveal reveal-delay-3 rounded-4 p-4 p-sm-5 mb-0 h-100">
                        <p class="text-theme-muted lh-base mb-4">&ldquo;Professional, responsive, and deeply technical —
                            exactly the partner we needed for digital transformation.&rdquo;</p>
                        <footer class="d-flex align-items-center gap-3">
                            <div class="testimonial-avatar testimonial-avatar--indigo">ML</div>
                            <div>
                                <cite class="fst-normal fw-semibold text-theme small">Maria L.</cite>
                                <p class="text-theme-muted text-meta mb-0">CTO, Retail Group</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
