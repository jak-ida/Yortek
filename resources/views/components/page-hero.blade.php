@props([
    'eyebrow' => null,
    'title' => null,
    'subtitle' => null,
    'heroClass' => '',
])

<div class="home-hero-scene about-hero-scene page-hero position-relative text-white overflow-hidden" style="isolation: isolate;">
    <div class="home-hero-scene__backdrop pe-none" aria-hidden="true"
        style="background-image: url('{{ asset('images/hero-background.png') }}')">
        <div class="position-absolute top-0 start-0 w-100 h-100 hero-overlay"></div>
    </div>

    <div class="pe-none position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;" aria-hidden="true">
        <div class="home-hero-orb home-hero-orb--teal-lg animate-pulse"></div>
        <div class="home-hero-orb home-hero-orb--blue animate-pulse" style="animation-delay: 1.2s;"></div>
    </div>

    <section @class(['about-hero', 'position-relative', $heroClass]) style="z-index: 10;">
        <div class="container-xl px-4 px-lg-5">
            @if (trim($slot))
                {{ $slot }}
            @else
                <div class="page-hero__content text-start">
                    @if ($eyebrow)
                        <div class="hero-enter hero-pill mb-4">
                            <span class="hero-pill__dot" aria-hidden="true"></span>
                            {{ $eyebrow }}
                        </div>
                    @endif

                    @if ($title)
                        <h1 class="hero-enter hero-enter-delay-1 about-hero-title fw-bold mb-4">{{ $title }}</h1>
                    @endif

                    @if ($subtitle)
                        <p class="hero-enter hero-enter-delay-2 home-hero-subtitle page-hero__subtitle mb-0 lh-base">{{ $subtitle }}</p>
                    @endif
                </div>
            @endif
        </div>
    </section>
</div>
