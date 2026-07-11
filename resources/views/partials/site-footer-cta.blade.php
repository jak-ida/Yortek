<section class="home-cta-footer position-relative home-cta-glow text-white overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25 pe-none" aria-hidden="true">
        <div class="home-cta-orb home-cta-orb--teal animate-pulse"></div>
        <div class="home-cta-orb home-cta-orb--blue animate-pulse" style="animation-delay: 1.5s;"></div>
    </div>

    <div class="home-cta-footer__cta position-relative px-4 px-lg-5">
        <div class="home-cta-footer__inline mx-auto reveal">
            <h2 class="home-cta-footer__heading fw-bold lh-sm mb-0">Let&rsquo;s build something remarkable together</h2>
            <div class="home-cta-footer__actions d-flex flex-wrap gap-3">
                <a href="{{ route('contact') }}" class="btn-yortek btn-raise">
                    Contact Us Today
                </a>
                <a href="{{ route('services') }}" class="btn-yortek-outline btn-raise">
                    Explore Services
                </a>
            </div>
        </div>
    </div>

    @include('partials.site-footer', ['merged' => true])
</section>
