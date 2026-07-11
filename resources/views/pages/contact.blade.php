@extends('layouts.app')

@section('title', 'Contact — Yortek Innovations')

@section('content')
    <x-page-hero
        eyebrow="Get In Touch"
        title="Let&rsquo;s start the conversation"
        subtitle="Have a project in mind? Tell us what you are building and we will help you find the right path forward."
    />

    <section class="position-relative section-surface home-why-section">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Contact Details</p>
                    <h2 class="display-6 fw-bold text-theme lh-sm mb-3">We are easy to reach</h2>
                    <p class="section-lead mb-4">
                        Reach out directly or send a message — our team typically responds within one business day.
                    </p>

                    <div class="d-flex flex-column gap-3">
                        <div class="home-value-card rounded-4 p-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="value-icon value-icon--blue">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fw-semibold text-theme mb-1 h6">Email</h3>
                                    <p class="text-theme-muted small mb-0">info@yortekinnovations.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="home-value-card rounded-4 p-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="value-icon value-icon--teal">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fw-semibold text-theme mb-1 h6">Phone</h3>
                                    <p class="text-theme-muted small mb-0">+1 (555) 123-4567</p>
                                </div>
                            </div>
                        </div>

                        <div class="home-value-card rounded-4 p-4">
                            <div class="d-flex align-items-start gap-3">
                                <div class="value-icon value-icon--indigo">
                                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fw-semibold text-theme mb-1 h6">Location</h3>
                                    <p class="text-theme-muted small mb-0">123 Innovation Drive, Tech City</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 reveal reveal-delay-1">
                    <div class="home-value-card rounded-4 p-4 p-lg-5">
                        <p class="section-eyebrow text-primary mb-2">Send a Message</p>
                        <h2 class="display-6 fw-bold text-theme lh-sm mb-4">Tell us about your project</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label small fw-medium text-theme">Name</label>
                                <input type="text" id="name" name="name" class="form-control form-control-modern" placeholder="Your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label small fw-medium text-theme">Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-modern" placeholder="you@example.com">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label small fw-medium text-theme">Message</label>
                                <textarea id="message" name="message" rows="5" class="form-control form-control-modern" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="button" class="btn-yortek btn-raise w-100">
                                Send Message
                            </button>
                            <p class="text-theme-muted text-meta text-center mt-3 mb-0">Form submission will be enabled in a future update.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services-showcase position-relative overflow-hidden">
        <div class="container-xl px-4 px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 reveal">
                    <div class="about-media about-media--landscape">
                        <img src="{{ asset('images/work-it-consulting.png') }}" alt="Consultation with the Yortek team" loading="lazy"
                            class="about-media__image">
                    </div>
                </div>

                <div class="col-lg-6 reveal reveal-delay-1">
                    <blockquote class="home-quote-card rounded-4 p-4 p-sm-5 mb-0">
                        <p class="text-theme-muted lh-base mb-4">&ldquo;The best projects start with a clear conversation. Share your goals, timeline, and constraints — we will help you shape a practical plan.&rdquo;</p>
                        <footer class="d-flex align-items-center gap-3">
                            <div class="testimonial-avatar testimonial-avatar--teal">YT</div>
                            <div>
                                <cite class="fst-normal fw-semibold text-theme small">Yortek Team</cite>
                                <p class="text-theme-muted text-meta mb-0">Client partnerships</p>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
@endsection
