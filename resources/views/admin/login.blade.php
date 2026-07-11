<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login — {{ config('app.name') }}</title>
    @include('partials.theme-init')
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body min-vh-100 d-flex align-items-center justify-content-center p-3 position-relative">
    <div class="position-absolute top-0 end-0 p-3">
        @include('partials.theme-toggle')
    </div>
    <div class="w-100" style="max-width: 28rem;">
        <div class="text-center mb-4">
            <div class="brand-mark d-inline-flex align-items-center justify-content-center rounded-3 text-white fw-bold fs-4 mb-3" style="width: 3.5rem; height: 3.5rem;">Y</div>
            <h1 class="h3 fw-bold text-dark">Admin Portal</h1>
            <p class="text-secondary small mt-1 mb-0">Sign in to manage Yortek Innovations</p>
        </div>

        <div class="modern-card border-0 shadow-lg">
            <div class="card-body p-4 p-md-5">
                @if ($errors->any())
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label small fw-medium">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            class="form-control"
                            placeholder="admin@yortek.com"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label small fw-medium">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="form-control"
                            placeholder="••••••••"
                        >
                    </div>

                    <div class="form-check mb-4">
                        <input type="checkbox" id="remember" name="remember" class="form-check-input">
                        <label for="remember" class="form-check-label small text-secondary">Remember me</label>
                    </div>

                    <button type="submit" class="btn-raise btn btn-primary w-100 fw-semibold">
                        Sign In
                    </button>
                </form>
            </div>
        </div>

        <p class="text-center mt-4 mb-0">
            <a href="{{ route('home') }}" class="small text-secondary text-decoration-none">&larr; Back to website</a>
        </p>
    </div>
</body>
</html>
