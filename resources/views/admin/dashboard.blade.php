@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <p class="text-secondary mb-0">Welcome back, <strong class="text-dark">{{ auth()->user()->name }}</strong>. Here's an overview of your portal.</p>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-lg-4">
            <div class="card border shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="small fw-medium text-secondary mb-0">Total Users</h3>
                        <div class="dashboard-stat-icon dashboard-stat-icon--blue">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                    </div>
                    <p class="display-6 fw-bold text-dark mb-0">{{ $userCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card border shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="small fw-medium text-secondary mb-0">Administrators</h3>
                        <div class="dashboard-stat-icon dashboard-stat-icon--green">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                    </div>
                    <p class="display-6 fw-bold text-dark mb-0">{{ $adminCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card border shadow-sm h-100">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="small fw-medium text-secondary mb-0">Website Status</h3>
                        <div class="dashboard-stat-icon dashboard-stat-icon--emerald">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                    </div>
                    <p class="h5 fw-semibold text-success mb-0">Online</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card border shadow-sm">
        <div class="card-body p-4">
            <h2 class="h5 fw-semibold text-dark mb-4">Quick Actions</h2>
            <div class="row g-3">
                <div class="col-sm-6">
                    <a href="{{ route('home') }}" target="_blank" class="btn-raise d-flex align-items-center gap-3 p-3 border rounded text-decoration-none text-dark">
                        <div class="dashboard-stat-icon dashboard-stat-icon--blue flex-shrink-0">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        </div>
                        <div>
                            <p class="fw-medium text-dark mb-0">View Public Website</p>
                            <p class="small text-secondary mb-0">Open the live site in a new tab</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center gap-3 p-3 border rounded opacity-50">
                        <div class="dashboard-stat-icon bg-light text-secondary flex-shrink-0">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                        </div>
                        <div>
                            <p class="fw-medium text-dark mb-0">Manage Content</p>
                            <p class="small text-secondary mb-0">Coming soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
