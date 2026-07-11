import 'bootstrap';

const themeStorageKey = 'yortek-theme';
const themeToggles = document.querySelectorAll('.js-theme-toggle');

const getTheme = () => document.documentElement.getAttribute('data-bs-theme') || 'light';

const updateThemeToggleState = () => {
    const isDark = getTheme() === 'dark';

    themeToggles.forEach((toggle) => {
        toggle.setAttribute('aria-pressed', isDark ? 'true' : 'false');
        toggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to dark mode');
    });
};

const setTheme = (theme) => {
    document.documentElement.setAttribute('data-bs-theme', theme);
    localStorage.setItem(themeStorageKey, theme);
    updateThemeToggleState();
};

if (themeToggles.length > 0) {
    themeToggles.forEach((toggle) => {
        toggle.addEventListener('click', () => {
            setTheme(getTheme() === 'dark' ? 'light' : 'dark');
        });
    });

    updateThemeToggleState();
}

const siteHeader = document.querySelector('.site-header');

if (siteHeader) {
    const onScroll = () => {
        siteHeader.classList.toggle('is-scrolled', window.scrollY > 24);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}

const rotatingWord = document.getElementById('hero-rotating-word');
const rotatingWordSpacer = document.getElementById('hero-rotating-word-spacer');

if (rotatingWord && rotatingWordSpacer) {
    const words = JSON.parse(rotatingWord.dataset.words);
    const longestWord = words.reduce((longest, word) => (word.length > longest.length ? word : longest), '');
    rotatingWordSpacer.textContent = longestWord;

    let index = 0;

    setInterval(() => {
        rotatingWord.classList.add('hero-word-fade-out');

        setTimeout(() => {
            index = (index + 1) % words.length;
            rotatingWord.textContent = words[index];
            rotatingWord.classList.remove('hero-word-fade-out');
        }, 300);
    }, 2800);
}

const revealElements = document.querySelectorAll('.reveal');

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    revealElements.forEach((element) => revealObserver.observe(element));
}

const counterElements = document.querySelectorAll('[data-count]');

if (counterElements.length > 0) {
    const animateCounter = (element) => {
        const target = Number(element.dataset.count);
        const suffix = element.dataset.suffix ?? '';
        const duration = 1400;
        const start = performance.now();

        const tick = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            element.textContent = `${Math.round(target * eased)}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        };

        requestAnimationFrame(tick);
    };

    const counterObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.4 }
    );

    counterElements.forEach((element) => counterObserver.observe(element));
}

const marqueeCards = document.querySelectorAll('.home-services-marquee__card');

if (marqueeCards.length > 0) {
    marqueeCards.forEach((card) => {
        const row = card.closest('.home-services-marquee__row');

        card.addEventListener('mouseenter', () => {
            row?.classList.add('is-paused');
            card.classList.add('is-active');
        });

        card.addEventListener('mouseleave', () => {
            row?.classList.remove('is-paused');
            card.classList.remove('is-active');
        });
    });
}
