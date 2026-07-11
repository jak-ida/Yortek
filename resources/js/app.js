const rotatingWord = document.getElementById('hero-rotating-word');
const rotatingWordSpacer = document.getElementById('hero-rotating-word-spacer');

if (rotatingWord && rotatingWordSpacer) {
    const words = JSON.parse(rotatingWord.dataset.words);
    const longestWord = words.reduce((longest, word) => (word.length > longest.length ? word : longest), '');
    rotatingWordSpacer.textContent = longestWord;

    let index = 0;

    setInterval(() => {
        rotatingWord.classList.add('opacity-0', 'translate-y-2');

        setTimeout(() => {
            index = (index + 1) % words.length;
            rotatingWord.textContent = words[index];
            rotatingWord.classList.remove('opacity-0', 'translate-y-2');
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
