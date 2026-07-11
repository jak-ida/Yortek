<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Admin') — {{ config('app.name') }}</title>
    @include('partials.theme-init')
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body min-vh-100">
    <div class="d-flex min-vh-100">
        <aside class="admin-sidebar d-flex flex-column flex-shrink-0">
            <div class="p-4 border-bottom border-secondary">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                    <span class="brand-mark rounded-2 d-flex align-items-center justify-content-center text-white fw-bold small">Y</span>
                    <div>
                        <span class="text-white fw-semibold small d-block">Yortek Admin</span>
                        <span class="text-secondary" style="font-size: 0.75rem;">Portal</span>
                    </div>
                </a>
            </div>

            <nav class="nav flex-column flex-grow-1 p-3 gap-1">
                <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center gap-3 px-3 py-2 small fw-medium {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('home') }}" target="_blank" class="nav-link d-flex align-items-center gap-3 px-3 py-2 small fw-medium">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    View Website
                </a>
            </nav>

            <div class="p-3 border-top border-secondary">
                <div class="d-flex align-items-center gap-3 px-3 py-2 mb-2">
                    <div class="admin-user-avatar">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div class="min-w-0">
                        <p class="small fw-medium text-white text-truncate mb-0">{{ auth()->user()->name }}</p>
                        <p class="text-secondary text-truncate mb-0" style="font-size: 0.75rem;">{{ auth()->user()->email }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn-raise btn btn-link nav-link w-100 d-flex align-items-center gap-3 px-3 py-2 small fw-medium text-secondary text-decoration-none border-0">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Sign Out
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-grow-1 d-flex flex-column min-w-0">
            <header class="bg-body border-bottom px-4 py-3">
                <div class="d-flex align-items-center justify-content-between gap-3">
                    <h1 class="h5 fw-semibold text-dark mb-0">@yield('page-title', 'Dashboard')</h1>
                    @include('partials.theme-toggle')
                </div>
            </header>

            <main class="flex-grow-1 p-4 section-surface">
                @if (session('success'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
