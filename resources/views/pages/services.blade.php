@extends('layouts.app')

@section('title', 'Services — Yortek Innovations')

@section('content')
    <x-page-hero
        eyebrow="What We Do"
        title="Services built for modern teams"
        subtitle="Comprehensive technology solutions tailored to your business — from strategy and design to launch and long-term support."
    />

    <section class="position-relative section-surface home-why-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <p class="section-eyebrow text-primary mb-2">Our Expertise</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">End-to-end capabilities</h2>
                    <p class="section-lead mb-3">
                        Whether you are launching something new or modernizing what already exists, we bring the right mix of consulting, engineering, and design.
                    </p>
                    <p class="text-theme-muted lh-base mb-0">
                        Every engagement is scoped around your goals, timeline, and team — with clear milestones, transparent communication, and deliverables you can build on.
                    </p>
                </div>

                <div class="col-lg-6 reveal reveal-delay-1">
                    <div class="about-media about-media--landscape">
                        <img src="{{ asset('images/work-software-development.png') }}" alt="Software development team at work" loading="lazy"
                            class="about-media__image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <x-section-intro
                eyebrow="Core Services"
                title="What we help you build"
                lead="Practical, scalable solutions across the full product lifecycle."
            />

            <div class="row g-3">
                @foreach ([
                    ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'title' => 'Web Development', 'desc' => 'Responsive, performant websites and web applications using Laravel, React, and modern tooling.', 'tone' => 'blue'],
                    ['icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z', 'title' => 'Mobile Apps', 'desc' => 'Native and cross-platform mobile solutions that deliver seamless user experiences.', 'tone' => 'teal'],
                    ['icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'title' => 'Cloud Solutions', 'desc' => 'Migration, deployment, and management on AWS, Azure, and other cloud platforms.', 'tone' => 'indigo'],
                    ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'title' => 'UI/UX Design', 'desc' => 'User-centered design that balances aesthetics with usability and accessibility.', 'tone' => 'blue'],
                    ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'title' => 'Data Analytics', 'desc' => 'Turn your data into actionable insights with dashboards, reports, and BI tools.', 'tone' => 'teal'],
                    ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => 'Support & Maintenance', 'desc' => 'Ongoing support, monitoring, and updates to keep your systems running smoothly.', 'tone' => 'indigo'],
                ] as $index => $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="home-value-card reveal {{ $index > 0 ? 'reveal-delay-' . min($index, 4) : '' }} rounded-4 p-4 h-100">
                            <div class="value-icon value-icon--{{ $service['tone'] }}">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/>
                                </svg>
                            </div>
                            <h3 class="fw-bold text-theme mb-2">{{ $service['title'] }}</h3>
                            <p class="small text-theme-muted lh-base mb-0">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="position-relative section-surface home-how-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Why Yortek</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">More than a vendor</h2>
                    <p class="text-theme-muted lh-base mb-4">
                        We embed with your team, communicate clearly, and focus on outcomes — not just output. That is how we have helped clients ship faster and scale with confidence.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-yortek-ghost btn-raise">
                        Discuss your project
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-1 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">2x</div>
                                <p class="small text-theme-muted lh-base mb-0">Faster delivery with aligned planning</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-2 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">98%</div>
                                <p class="small text-theme-muted lh-base mb-0">Client satisfaction across engagements</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="home-value-card reveal reveal-delay-3 rounded-4 p-4 h-100 text-center">
                                <div class="about-stat-card__value text-theme">24/7</div>
                                <p class="small text-theme-muted lh-base mb-0">Support for critical systems</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-media about-media--landscape mt-3 reveal reveal-delay-2">
                        <img src="{{ asset('images/work-digital-transformation.png') }}" alt="Digital transformation consulting session" loading="lazy"
                            class="about-media__image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
