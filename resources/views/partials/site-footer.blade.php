<footer @class(['site-footer', 'site-footer--merged' => $merged ?? false])>
    @unless($merged ?? false)
        <div class="site-footer__glow site-footer__glow--left" aria-hidden="true"></div>
        <div class="site-footer__glow site-footer__glow--right" aria-hidden="true"></div>
    @endunless
    <div class="container-xl site-footer__inner position-relative {{ ($merged ?? false) ? 'pb-4 pb-lg-5' : 'py-5' }}">
        <div class="row g-4 align-items-start">
            <div class="col-12 col-lg-7">
                <div class="site-footer__links-group d-flex flex-wrap">
                    <div>
                        <h3 class="text-white fw-semibold mb-3 h6">Quick Links</h3>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                            <li class="mb-2"><a href="{{ route('about') }}">About</a></li>
                            <li class="mb-2"><a href="{{ route('services') }}">Services</a></li>
                            <li class="mb-2"><a href="{{ route('projects.index') }}">Projects</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white fw-semibold mb-3 h6">Contact</h3>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2">info@yortekinnovations.com</li>
                            <li>+1 (555) 123-4567</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white fw-semibold mb-3 h6">Socials</h3>
                        <div class="site-footer__socials">
                            <a href="https://linkedin.com/company/yortek-innovations" class="site-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a-2.063 2.063 0 110-4.126 2.063 2.063 0 010 4.126zM6.756 20.452H3.917V9h2.839v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="https://x.com/yortekinnovations" class="site-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="X">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com/yortekinnovations" class="site-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 6.838a5.162 5.162 0 100 10.324 5.162 5.162 0 000-10.324zm6.406-3.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                                </svg>
                            </a>
                            <a href="https://facebook.com/yortekinnovations" class="site-footer__social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 text-lg-end">
                <div class="site-footer__brand mb-3">Yortek</div>
            </div>
        </div>
        <div class="border-top border-secondary border-opacity-25 mt-4 mt-lg-5 pt-4 small text-center">
            &copy; {{ date('Y') }} Yortek Innovations. All rights reserved.
        </div>
    </div>
</footer>
