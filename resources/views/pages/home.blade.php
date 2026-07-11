@extends('layouts.app')

@section('title', 'Home — Yortek Innovations')

@section('content')
    <div class="home-hero-scene relative text-white isolate overflow-hidden">
        <div class="home-hero-scene__backdrop pointer-events-none" aria-hidden="true"
            style="background-image: url('{{ asset('images/hero-background.png') }}')">
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="pointer-events-none absolute inset-0 z-[1]" aria-hidden="true">
            <div class="absolute -top-32 right-0 w-[28rem] h-[28rem] rounded-full bg-teal-400/25 blur-3xl animate-pulse"></div>
            <div class="absolute top-1/3 left-1/4 w-80 h-80 rounded-full bg-blue-500/20 blur-3xl animate-pulse"
                style="animation-delay: 1.2s"></div>
            <div class="absolute bottom-1/4 right-1/4 h-72 w-72 rounded-full bg-teal-400/15 blur-3xl"></div>
        </div>

    {{-- Hero --}}
    <section
        class="relative z-10 min-h-[105vh] sm:min-h-[118vh] flex items-center">
        <div class="relative w-full max-w-7xl mx-auto pl-4 pr-4 sm:pl-6 sm:pr-6 lg:pl-24 lg:pr-8 py-15 sm:py-24">
            <div class="max-w-4xl text-left">
                <p class="hero-enter text-sm font-semibold uppercase tracking-[0.25em] text-teal-200 mb-5">Technology
                    Partners</p>

                <h1
                    class="hero-enter hero-enter-delay-1 text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.05] mb-6">
                    Technology built to accelerate your
                    <span class="relative inline-block text-teal-200 align-bottom text-glow-teal">
                        <span id="hero-rotating-word-spacer" class="invisible inline-block whitespace-nowrap"
                            aria-hidden="true">Momentum</span>
                        <span id="hero-rotating-word"
                            class="absolute left-0 top-0 whitespace-nowrap transition-all duration-300 ease-in-out"
                            data-words='["Growth", "Momentum", "Reach", "Impact"]' aria-live="polite">Growth</span>
                    </span>
                </h1>

                <p
                    class="hero-enter hero-enter-delay-2 text-xl md:text-2xl font-normal text-teal-100/90 mb-10 tracking-wide max-w-2xl leading-relaxed">
                    Build bold. Scale smart.
                </p>

                <div class="hero-enter hero-enter-delay-3 flex flex-wrap gap-4 justify-start">
                    <a href="{{ route('services') }}" class="glass-btn glass-btn--primary btn-raise">
                        Our Services
                    </a>
                    <a href="{{ route('contact') }}"
                        class="btn-raise inline-flex items-center px-7 py-2 border border-white/60 text-white font-semibold rounded-full hover:bg-white/10">
                        Schedule a Call
                    </a>
                </div>
            </div>
        </div>

        <a href="#stats"
            class="hero-scroll-indicator absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex flex-col items-center gap-2 text-white/60 hover:text-white/90 transition-colors"
            aria-label="Scroll to content">
            <span class="text-[0.65rem] uppercase tracking-[0.2em]">Explore</span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </a>
    </section>

    {{-- Stats (bridges hero → content) --}}
    <section id="stats"
        class="home-stats-panel relative z-10 -mt-16 sm:-mt-20 w-full pt-16 sm:pt-20 pb-16 sm:pb-24">
        <div class="absolute inset-0 home-stats-panel__fade pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-[2] w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24">
            <div class="home-stats-glass-panel glass p-8 sm:p-10 lg:p-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
                <div class="lg:col-span-4 reveal min-w-0">
                    <p class="glass home-stats-badge inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.22em] text-slate-700 rounded-full px-4 py-2 mb-6">
                        <span class="h-2 w-2 rounded-full bg-teal-400"></span>
                        Our Track Record
                    </p>
                    <h2 class="text-3xl sm:text-4xl font-bold text-black leading-tight mb-4">
                        Results that speak for themselves
                    </h2>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                        <div class="home-stat-card glass reveal rounded-2xl p-6 sm:p-7">
                            <div class="flex items-center justify-between mb-4">
                                <p class="text-sm font-semibold text-slate-700">Projects Delivered</p>
                                <div class="home-stat-card__icon glass rounded-xl">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight" data-count="50" data-suffix="+">0+</p>
                        </div>

                        <div class="home-stat-card glass reveal reveal-delay-1 rounded-2xl p-6 sm:p-7">
                            <div class="flex items-center justify-between mb-4">
                                <p class="text-sm font-semibold text-slate-700">Clients Served</p>
                                <div class="home-stat-card__icon glass rounded-xl">
                                    <svg class="w-5 h-5 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight" data-count="5" data-suffix="+">0+</p>
                        </div>

                        <div class="home-stat-card glass reveal reveal-delay-2 rounded-2xl p-6 sm:p-7">
                            <div class="flex items-center justify-between mb-4">
                                <p class="text-sm font-semibold text-slate-700">Years Experience</p>
                                <div class="home-stat-card__icon glass rounded-xl">
                                    <svg class="w-5 h-5 text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight" data-count="15" data-suffix="">0</p>
                        </div>

                        <div class="home-stat-card glass reveal reveal-delay-3 rounded-2xl p-6 sm:p-7">
                            <div class="flex items-center justify-between mb-4">
                                <p class="text-sm font-semibold text-slate-700">Client Satisfaction</p>
                                <div class="home-stat-card__icon glass rounded-xl">
                                    <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight" data-count="100" data-suffix="%">0%</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    </div>

    {{-- Why Yortek --}}
    <section id="why" class="relative z-0 bg-slate-50 pt-12 sm:pt-16 pb-20 sm:pb-24">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-5 reveal min-w-0">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600 mb-3">Why Yortek</p>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight mb-4">Built for businesses that
                        move fast</h2>
                    <p class="text-slate-600 text-lg leading-relaxed mb-6">
                        We combine strategy, design, and engineering to deliver technology that scales with your ambitions —
                        not against them.
                    </p>
                    <a href="{{ route('about') }}"
                        class="btn-raise inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                        Learn about us
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-5 min-w-0">
                    <div class="home-value-card reveal reveal-delay-1 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Innovation</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Modern stacks and forward-thinking solutions
                            tailored to your goals.</p>
                    </div>
                    <div class="home-value-card reveal reveal-delay-2 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Integrity</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Transparent communication and dependable delivery
                            at every stage.</p>
                    </div>
                    <div class="home-value-card reveal reveal-delay-3 rounded-2xl p-6">
                        <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-900 mb-2">Excellence</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Rigorous quality standards from discovery through
                            launch and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services — project showcase marquees --}}
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

    <section id="services" class="home-services-showcase relative z-0 overflow-hidden bg-slate-50 py-20 sm:py-24">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24 lg:pr-8">
            <div class="reveal max-w-2xl mb-12 sm:mb-14">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600 mb-3">Our Expertise</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight mb-4">Services That We Offer</h2>
                <p class="text-slate-600 text-lg leading-relaxed">
                    End-to-end technology solutions designed to help your business grow, modernize, and succeed.
                </p>
            </div>
        </div>

        <div class="home-services-marquee flex flex-col gap-4 sm:gap-5" aria-hidden="true">
            @foreach ($showcaseRows as $row)
                <div class="home-services-marquee__viewport">
                    <div @class([
                        'home-services-marquee__row',
                        'home-services-marquee__row--right' => $row['direction'] === 'right',
                        'home-services-marquee__row--offset' => $row['offset'],
                    ]) style="--marquee-duration: {{ $row['duration'] }}">
                        @foreach (array_merge($row['items'], $row['items']) as $project)
                            <div class="home-services-marquee__card">
                                <img src="{{ asset($project['src']) }}" alt="" loading="lazy"
                                    class="h-full w-full object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24 lg:pr-8 mt-12 sm:mt-14">
            <div class="reveal">
                <a href="{{ route('services') }}"
                    class="btn-raise inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors">
                    View all services
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="relative z-0 bg-slate-50 py-20 sm:py-24">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24">
            <div class="reveal max-w-2xl mb-12 sm:mb-16">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600 mb-3">How We Work</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight mb-4">A clear path from idea to
                    impact</h2>
                <p class="text-slate-600 text-lg leading-relaxed">Our proven process keeps your project focused,
                    collaborative, and on schedule.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
                <div class="home-process-step reveal reveal-delay-1 text-center lg:text-left">
                    <div
                        class="w-14 h-14 mx-auto lg:mx-0 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 text-white flex items-center justify-center text-lg font-bold mb-5 shadow-lg shadow-blue-500/25">
                        01</div>
                    <h3 class="font-bold text-slate-900 mb-2">Discover</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We learn your business, users, and goals to define
                        the right solution.</p>
                </div>
                <div class="home-process-step reveal reveal-delay-2 text-center lg:text-left">
                    <div
                        class="w-14 h-14 mx-auto lg:mx-0 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 text-white flex items-center justify-center text-lg font-bold mb-5 shadow-lg shadow-cyan-500/25">
                        02</div>
                    <h3 class="font-bold text-slate-900 mb-2">Design</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We craft intuitive experiences and a technical
                        architecture built to scale.</p>
                </div>
                <div class="home-process-step reveal reveal-delay-3 text-center lg:text-left">
                    <div
                        class="w-14 h-14 mx-auto lg:mx-0 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center text-lg font-bold mb-5 shadow-lg shadow-indigo-500/25">
                        03</div>
                    <h3 class="font-bold text-slate-900 mb-2">Build</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">Agile development with regular updates so you stay
                        informed and in control.</p>
                </div>
                <div class="home-process-step reveal reveal-delay-4 text-center lg:text-left">
                    <div
                        class="w-14 h-14 mx-auto lg:mx-0 rounded-2xl bg-gradient-to-br from-teal-500 to-blue-600 text-white flex items-center justify-center text-lg font-bold mb-5 shadow-lg shadow-teal-500/25">
                        04</div>
                    <h3 class="font-bold text-slate-900 mb-2">Launch &amp; Grow</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">We deploy, optimize, and support your product as your
                        needs evolve.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="relative z-0 bg-white py-20 sm:py-24 pb-28 sm:pb-32">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 lg:pl-24">
            <div class="reveal max-w-2xl mb-12">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600 mb-3">Client Stories</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">Trusted by teams who expect more
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-6">
                <blockquote class="home-quote-card reveal reveal-delay-1 rounded-2xl p-7 sm:p-8">
                    <p class="text-slate-700 leading-relaxed mb-6">&ldquo;Yortek transformed our outdated systems into a
                        streamlined platform our team actually enjoys using.&rdquo;</p>
                    <footer class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 text-white flex items-center justify-center text-sm font-bold">
                            AK</div>
                        <div>
                            <cite class="not-italic font-semibold text-slate-900 text-sm">Amina K.</cite>
                            <p class="text-xs text-slate-500">Operations Director</p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="home-quote-card reveal reveal-delay-2 rounded-2xl p-7 sm:p-8">
                    <p class="text-slate-700 leading-relaxed mb-6">&ldquo;Their consulting helped us choose the right tech
                        stack and cut our launch timeline in half.&rdquo;</p>
                    <footer class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-teal-400 to-blue-500 text-white flex items-center justify-center text-sm font-bold">
                            JR</div>
                        <div>
                            <cite class="not-italic font-semibold text-slate-900 text-sm">James R.</cite>
                            <p class="text-xs text-slate-500">Founder, SaaS Startup</p>
                        </div>
                    </footer>
                </blockquote>

                <blockquote class="home-quote-card reveal reveal-delay-3 rounded-2xl p-7 sm:p-8">
                    <p class="text-slate-700 leading-relaxed mb-6">&ldquo;Professional, responsive, and deeply technical —
                        exactly the partner we needed for digital transformation.&rdquo;</p>
                    <footer class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-400 to-blue-600 text-white flex items-center justify-center text-sm font-bold">
                            ML</div>
                        <div>
                            <cite class="not-italic font-semibold text-slate-900 text-sm">Maria L.</cite>
                            <p class="text-xs text-slate-500">CTO, Retail Group</p>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section
        class="relative z-10 -mt-16 sm:-mt-20 home-cta-glow text-white overflow-hidden rounded-t-[3.5rem] shadow-[0_-12px_40px_rgba(0,0,0,0.2)]">
        <div class="absolute inset-0 opacity-30 pointer-events-none" aria-hidden="true">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-teal-400/30 blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-32 -left-16 w-80 h-80 rounded-full bg-blue-400/20 blur-3xl animate-pulse"
                style="animation-delay: 1.5s"></div>
        </div>

        <div class="relative pt-28 pb-20 sm:pt-32 sm:pb-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-teal-200 mb-4">Ready to innovate?</p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-5">Let&rsquo;s build
                    something remarkable together</h2>
                <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto leading-relaxed">
                    Tell us about your goals and we&rsquo;ll map out a clear path to get you there — no pressure, just a
                    conversation.
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="btn-raise inline-flex items-center px-7 py-2.5 bg-white text-blue-700 font-semibold rounded-full hover:bg-blue-50">
                        Contact Us Today
                    </a>
                    <a href="{{ route('services') }}"
                        class="btn-raise inline-flex items-center px-7 py-2.5 border border-white/60 text-white font-semibold rounded-full hover:bg-white/10">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
