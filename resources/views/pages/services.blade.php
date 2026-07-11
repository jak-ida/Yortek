@extends('layouts.app')

@section('title', 'Services — Yortek Innovations')

@section('content')
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h1 class="text-4xl font-bold text-slate-900 mb-4">Our Services</h1>
            <p class="text-lg text-slate-600 max-w-2xl">Comprehensive technology solutions tailored to your business needs.</p>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ([
                    ['title' => 'Web Development', 'desc' => 'Responsive, performant websites and web applications using Laravel, React, and modern tooling.'],
                    ['title' => 'Mobile Apps', 'desc' => 'Native and cross-platform mobile solutions that deliver seamless user experiences.'],
                    ['title' => 'Cloud Solutions', 'desc' => 'Migration, deployment, and management on AWS, Azure, and other cloud platforms.'],
                    ['title' => 'UI/UX Design', 'desc' => 'User-centered design that balances aesthetics with usability and accessibility.'],
                    ['title' => 'Data Analytics', 'desc' => 'Turn your data into actionable insights with dashboards, reports, and BI tools.'],
                    ['title' => 'Support & Maintenance', 'desc' => 'Ongoing support, monitoring, and updates to keep your systems running smoothly.'],
                ] as $service)
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-slate-100 hover:border-blue-200 hover:shadow-md transition">
                        <h3 class="text-xl font-semibold text-slate-900 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
