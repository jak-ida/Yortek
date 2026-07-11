@extends('layouts.app')

@section('title', 'Services — Yortek Innovations')

@section('content')
    <section class="page-hero">
        <div class="container-xl py-5 pb-5">
            <span class="page-hero__badge">What We Do</span>
            <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -0.03em;">Our <span class="text-gradient">Services</span></h1>
            <p class="lead mb-0">Comprehensive technology solutions tailored to your business needs.</p>
        </div>
    </section>

    <section class="py-5 section-surface">
        <div class="container-xl">
            <div class="row g-4">
                @foreach ([
                    ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'title' => 'Web Development', 'desc' => 'Responsive, performant websites and web applications using Laravel, React, and modern tooling.'],
                    ['icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z', 'title' => 'Mobile Apps', 'desc' => 'Native and cross-platform mobile solutions that deliver seamless user experiences.'],
                    ['icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'title' => 'Cloud Solutions', 'desc' => 'Migration, deployment, and management on AWS, Azure, and other cloud platforms.'],
                    ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'title' => 'UI/UX Design', 'desc' => 'User-centered design that balances aesthetics with usability and accessibility.'],
                    ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z', 'title' => 'Data Analytics', 'desc' => 'Turn your data into actionable insights with dashboards, reports, and BI tools.'],
                    ['icon' => 'M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z', 'title' => 'Support & Maintenance', 'desc' => 'Ongoing support, monitoring, and updates to keep your systems running smoothly.'],
                ] as $index => $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="modern-card service-card reveal {{ $index > 0 ? 'reveal-delay-' . min($index, 4) : '' }}">
                            <div class="service-card__icon">
                                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/>
                                </svg>
                            </div>
                            <h3 class="h5 fw-semibold text-theme mb-2">{{ $service['title'] }}</h3>
                            <p class="text-theme-muted small lh-base mb-0">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
