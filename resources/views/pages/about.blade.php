@extends('layouts.app')

@section('title', 'About — Yortek Innovations')

@section('content')
    <section class="page-hero">
        <div class="container-xl py-5 pb-5">
            <span class="page-hero__badge">Who We Are</span>
            <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -0.03em;">About <span class="text-gradient">Yortek</span></h1>
            <p class="lead mb-0">Learn more about our mission, values, and the team behind Yortek Innovations.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <p class="section-eyebrow text-primary mb-2">Our Mission</p>
                    <h2 class="h2 fw-bold text-theme mb-3" style="letter-spacing: -0.02em;">Technology with purpose</h2>
                    <p class="text-theme-muted lh-base mb-3">
                        At Yortek Innovations, we believe technology should empower people and organizations to achieve more. Our mission is to deliver innovative, reliable, and scalable solutions that drive meaningful change.
                    </p>
                    <p class="text-theme-muted lh-base mb-0">
                        Founded with a passion for problem-solving, we partner with businesses of all sizes to turn ideas into reality through thoughtful design and expert engineering.
                    </p>
                </div>
                <div class="col-lg-6 reveal reveal-delay-1">
                    <div class="modern-card p-4 p-lg-5">
                        <h3 class="h5 fw-semibold text-theme mb-4">Our Values</h3>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                            <li class="d-flex align-items-start gap-3">
                                <span class="about-value-badge">1</span>
                                <div>
                                    <strong class="text-theme">Innovation</strong>
                                    <p class="small text-theme-muted mb-0">We embrace new ideas and technologies to stay ahead.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span class="about-value-badge">2</span>
                                <div>
                                    <strong class="text-theme">Integrity</strong>
                                    <p class="small text-theme-muted mb-0">We build trust through transparency and honest communication.</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span class="about-value-badge">3</span>
                                <div>
                                    <strong class="text-theme">Excellence</strong>
                                    <p class="small text-theme-muted mb-0">We hold ourselves to the highest standards in everything we deliver.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
