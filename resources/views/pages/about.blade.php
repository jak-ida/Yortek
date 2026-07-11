@extends('layouts.app')

@section('title', 'About — Yortek Innovations')

@section('content')
    <x-page-hero
        eyebrow="Who We Are"
        title="Built with Purpose"
        subtitle="We are focused on helping organizations build, modernize, and scale with clarity and care."
    />

    <section class="position-relative section-surface home-why-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <p class="section-eyebrow text-primary mb-2">Our Mission</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">Technology with purpose</h2>
                    <p class="section-lead mb-3">
                        At Yortek Innovations, we believe technology should empower people and organizations to achieve more.
                    </p>
                    <p class="text-theme-muted lh-base mb-4">
                        Founded with a passion for problem-solving, we partner with businesses of all sizes to turn ideas into reality through thoughtful design, expert engineering, and long-term support.
                    </p>

                    <blockquote class="home-quote-card rounded-4 p-4 mb-0">
                        <p class="text-theme-muted lh-base mb-4">&ldquo;We do not just ship software. We build relationships, earn trust, and stay accountable to the outcomes that matter.&rdquo;</p>
                        <footer class="d-flex align-items-center gap-3">
                            <div class="testimonial-avatar testimonial-avatar--blue">YI</div>
                            <div>
                                <cite class="fst-normal fw-semibold text-theme small">Yortek Innovations</cite>
                                <p class="text-theme-muted text-meta mb-0">Our guiding principle</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>

                <div class="col-lg-6 reveal reveal-delay-1">
                    <div class="about-media about-media--portrait">
                        <img src="{{ asset('images/work-digital-transformation.png') }}" alt="Digital transformation planning session" loading="lazy"
                            class="about-media__image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                eyebrow="Our Values"
                title="What guides every engagement"
                lead="The principles behind how we think, build, and partner with our clients."
            />

            <div class="about-media-grid reveal mb-4">
                <div class="about-media about-media--tile">
                    <img src="{{ asset('images/work-software-development.png') }}" alt="Software development in progress" loading="lazy"
                        class="about-media__image">
                </div>
                <div class="about-media about-media--tile">
                    <img src="{{ asset('images/work-it-consulting.png') }}" alt="IT consulting workshop" loading="lazy"
                        class="about-media__image">
                </div>
                <div class="about-media about-media--tile">
                    <img src="{{ asset('images/work-digital-transformation.png') }}" alt="Digital transformation strategy" loading="lazy"
                        class="about-media__image">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="home-value-card reveal reveal-delay-1 rounded-4 p-4 h-100">
                        <div class="value-icon value-icon--blue">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="fw-bold text-theme mb-2">Innovation</h3>
                        <p class="small text-theme-muted lh-base mb-0">We embrace new ideas and technologies to deliver solutions that keep you ahead.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-value-card reveal reveal-delay-2 rounded-4 p-4 h-100">
                        <div class="value-icon value-icon--teal">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="fw-bold text-theme mb-2">Integrity</h3>
                        <p class="small text-theme-muted lh-base mb-0">We build trust through transparency, honest communication, and dependable delivery.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-value-card reveal reveal-delay-3 rounded-4 p-4 h-100">
                        <div class="value-icon value-icon--indigo">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="fw-bold text-theme mb-2">Excellence</h3>
                        <p class="small text-theme-muted lh-base mb-0">We hold ourselves to the highest standards from discovery through launch and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Our Story</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">From problem-solvers to long-term partners</h2>
                    <p class="text-theme-muted lh-base mb-0">
                        Yortek began with a simple belief: the best technology work happens when strategy, design, and engineering move together. Today, we support teams across industries with the same hands-on approach — listening closely, planning carefully, and building with intent.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="home-value-card reveal reveal-delay-1 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">10+</div>
                                <p class="small text-theme-muted lh-base mb-0">Years delivering technology solutions</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="home-value-card reveal reveal-delay-2 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">120+</div>
                                <p class="small text-theme-muted lh-base mb-0">Projects launched across web, cloud, and mobile</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="home-value-card reveal reveal-delay-3 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">30+</div>
                                <p class="small text-theme-muted lh-base mb-0">Active client partnerships worldwide</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="home-value-card reveal reveal-delay-4 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">24/7</div>
                                <p class="small text-theme-muted lh-base mb-0">Support coverage for mission-critical systems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-partner-scroll position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="about-partner-scroll__layout">
                <div class="about-partner-scroll__sticky reveal">
                    <p class="section-eyebrow text-primary mb-2">How We Partner</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">A collaborative way of working</h2>
                    <p class="section-lead mb-0">
                        Every engagement follows a clear rhythm designed to keep your team informed, involved, and confident in the path forward.
                    </p>
                </div>

                <div class="about-partner-scroll__timeline">
                    <article class="about-partner-step reveal reveal-delay-1">
                        <div class="about-partner-step__content">
                            <p class="about-partner-step__label">Step 01</p>
                            <h3 class="about-partner-step__title fw-bold text-theme">Listen first</h3>
                            <p class="text-theme-muted lh-base mb-0">
                                We start by understanding your goals, constraints, and the people your product serves. Discovery workshops and stakeholder interviews set the foundation for everything that follows.
                            </p>
                        </div>
                    </article>

                    <article class="about-partner-step reveal reveal-delay-2">
                        <div class="about-partner-step__content">
                            <p class="about-partner-step__label">Step 02</p>
                            <h3 class="about-partner-step__title fw-bold text-theme">Plan together</h3>
                            <p class="text-theme-muted lh-base mb-4">
                                We align on scope, milestones, and success metrics before development begins so everyone shares the same roadmap from day one.
                            </p>
                            <div class="about-media about-media--landscape">
                                <img src="{{ asset('images/work-it-consulting.png') }}" alt="Partnership planning workshop" loading="lazy"
                                    class="about-media__image">
                            </div>
                        </div>
                    </article>

                    <article class="about-partner-step reveal reveal-delay-3">
                        <div class="about-partner-step__content">
                            <p class="about-partner-step__label">Step 03</p>
                            <h3 class="about-partner-step__title fw-bold text-theme">Build with clarity</h3>
                            <p class="text-theme-muted lh-base mb-0">
                                Transparent updates and iterative delivery keep your team informed at every stage. You see progress early, provide feedback often, and stay in control of priorities.
                            </p>
                        </div>
                    </article>

                    <article class="about-partner-step about-partner-step--last reveal reveal-delay-4">
                        <div class="about-partner-step__content">
                            <p class="about-partner-step__label">Step 04</p>
                            <h3 class="about-partner-step__title fw-bold text-theme">Grow long-term</h3>
                            <p class="text-theme-muted lh-base mb-4">
                                We stay engaged after launch to optimize, support, and evolve your platform as your business scales and new opportunities emerge.
                            </p>
                            <div class="about-media about-media--landscape">
                                <img src="{{ asset('images/work-software-development.png') }}" alt="Team delivering a launched product" loading="lazy"
                                    class="about-media__image">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
