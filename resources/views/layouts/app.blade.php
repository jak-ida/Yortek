<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @include('partials.theme-init')
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body d-flex flex-column min-vh-100">
    <header class="site-header fixed-top d-flex justify-content-center px-3 px-sm-4 pt-3" style="pointer-events: none;">
        <div class="glass rounded-pill px-3 px-sm-4 px-lg-5 w-100" style="pointer-events: auto;">
            <div class="position-relative d-flex align-items-center justify-content-between gap-3" style="height: 3.5rem; z-index: 2;">
                <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none flex-shrink-0">
                    <span class="brand-mark rounded-3 d-flex align-items-center justify-content-center text-white fw-bold small">Y</span>
                    <span class="brand-name d-none d-sm-inline">Yortek Innovations</span>
                </a>

                <nav class="glass-nav d-none d-md-flex" aria-label="Main navigation">
                    <a href="{{ route('home') }}" class="glass-nav__item {{ request()->routeIs('home') ? 'glass-nav__item--active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="glass-nav__item {{ request()->routeIs('about') ? 'glass-nav__item--active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="glass-nav__item {{ request()->routeIs('services') ? 'glass-nav__item--active' : '' }}">Services</a>
                    <a href="{{ route('contact') }}" class="glass-nav__item {{ request()->routeIs('contact') ? 'glass-nav__item--active' : '' }}">Contact</a>
                </nav>

                <div class="d-flex align-items-center gap-2">
                    @include('partials.theme-toggle')
                    <a href="{{ route('contact') }}" class="btn-yortek btn-raise d-none d-lg-inline-flex" style="padding: 0.55rem 1.15rem; font-size: 0.82rem;">Let's Talk</a>
                    <button class="nav-toggle d-md-none d-inline-flex align-items-center justify-content-center border-0"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav" aria-label="Open menu">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end mobile-nav-offcanvas" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-1">
            <a href="{{ route('home') }}" class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('services') }}" class="mobile-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
            <a href="{{ route('contact') }}" class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            <div class="mt-3 pt-3 border-top d-flex align-items-center justify-content-between gap-3">
                <span class="small text-theme-muted">Appearance</span>
                @include('partials.theme-toggle')
            </div>
            <div class="mt-3 pt-3 border-top">
                <a href="{{ route('contact') }}" class="btn-yortek w-100">Start a Project</a>
            </div>
        </div>
    </div>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @unless(View::hasSection('hide-footer'))
        @include('partials.site-footer')
    @endunless
</body>
</html>
