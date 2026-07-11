<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">
    <header class="site-header fixed top-0 inset-x-0 z-50 flex justify-center px-4 sm:px-6 pt-4 pointer-events-none">
        <div class="glass pointer-events-auto w-full max-w-6xl rounded-full px-4 sm:px-6 lg:px-8">
            <div class="relative z-[2] flex items-center justify-between h-14">
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                    <span class="w-8 h-8 rounded-lg bg-blue-600 flex items-center justify-center text-white font-bold text-sm">Y</span>
                    <span class="font-semibold text-slate-900">Yortek Innovations</span>
                </a>

                <nav class="glass-nav hidden md:flex" aria-label="Main navigation">
                    <a href="{{ route('home') }}" class="glass-nav__item {{ request()->routeIs('home') ? 'glass-nav__item--active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="glass-nav__item {{ request()->routeIs('about') ? 'glass-nav__item--active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="glass-nav__item {{ request()->routeIs('services') ? 'glass-nav__item--active' : '' }}">Services</a>
                    <a href="{{ route('contact') }}" class="glass-nav__item {{ request()->routeIs('contact') ? 'glass-nav__item--active' : '' }}">Contact</a>
                </nav>

                <a href="{{ route('admin.login') }}" class="glass-btn glass-btn--primary btn-raise hidden sm:inline-flex">Admin</a>
            </div>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-white font-semibold mb-3">Yortek Innovations</h3>
                    <p class="text-sm leading-relaxed">Driving innovation through technology solutions that empower businesses to grow and succeed.</p>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-3">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-3">Contact</h3>
                    <ul class="space-y-2 text-sm">
                        <li>info@yortekinnovations.com</li>
                        <li>+1 (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-700 mt-8 pt-8 text-sm text-center">
                &copy; {{ date('Y') }} Yortek Innovations. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
