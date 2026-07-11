@extends('layouts.app')

@section('title', 'About — Yortek Innovations')

@section('content')
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h1 class="text-4xl font-bold text-slate-900 mb-4">About Us</h1>
            <p class="text-lg text-slate-600 max-w-2xl">Learn more about our mission, values, and the team behind Yortek Innovations.</p>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Our Mission</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        At Yortek Innovations, we believe technology should empower people and organizations to achieve more. Our mission is to deliver innovative, reliable, and scalable solutions that drive meaningful change.
                    </p>
                    <p class="text-slate-600 leading-relaxed">
                        Founded with a passion for problem-solving, we partner with businesses of all sizes to turn ideas into reality through thoughtful design and expert engineering.
                    </p>
                </div>
                <div class="bg-blue-50 rounded-2xl p-10">
                    <h3 class="text-lg font-semibold text-slate-900 mb-6">Our Values</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">1</span>
                            <div>
                                <strong class="text-slate-900">Innovation</strong>
                                <p class="text-sm text-slate-600">We embrace new ideas and technologies to stay ahead.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">2</span>
                            <div>
                                <strong class="text-slate-900">Integrity</strong>
                                <p class="text-sm text-slate-600">We build trust through transparency and honest communication.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">3</span>
                            <div>
                                <strong class="text-slate-900">Excellence</strong>
                                <p class="text-sm text-slate-600">We hold ourselves to the highest standards in everything we deliver.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
