@extends('layouts.app')

@section('title', 'Contact — Yortek Innovations')

@section('content')
    <section class="page-hero">
        <div class="container-xl py-5 pb-5">
            <span class="page-hero__badge">Get In Touch</span>
            <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -0.03em;">Let's <span class="text-gradient">Connect</span></h1>
            <p class="lead mb-0">Have a project in mind? We'd love to hear from you.</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container-xl">
            <div class="row g-5">
                <div class="col-lg-5 reveal">
                    <p class="section-eyebrow text-primary mb-2">Contact Details</p>
                    <h2 class="h3 fw-bold text-theme mb-4" style="letter-spacing: -0.02em;">Start the conversation</h2>
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-semibold text-theme">Email</h3>
                                <p class="text-theme-muted small mb-0">info@yortekinnovations.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-semibold text-theme">Phone</h3>
                                <p class="text-theme-muted small mb-0">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="h6 fw-semibold text-theme">Location</h3>
                                <p class="text-theme-muted small mb-0">123 Innovation Drive, Tech City</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 reveal reveal-delay-1">
                    <div class="modern-card p-4 p-lg-5">
                        <h2 class="h5 fw-semibold text-theme mb-4">Send a Message</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label small fw-medium">Name</label>
                                <input type="text" id="name" name="name" class="form-control form-control-modern" placeholder="Your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label small fw-medium">Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-modern" placeholder="you@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label small fw-medium">Message</label>
                                <textarea id="message" name="message" rows="4" class="form-control form-control-modern" placeholder="How can we help?"></textarea>
                            </div>
                            <button type="button" class="btn-yortek btn-raise w-100">
                                Send Message
                            </button>
                            <p class="text-theme-muted text-center mt-3 mb-0" style="font-size: 0.75rem;">Form submission will be enabled in a future update.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
