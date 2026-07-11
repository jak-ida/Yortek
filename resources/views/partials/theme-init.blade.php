<script>
    (function () {
        const storageKey = 'yortek-theme';
        const stored = localStorage.getItem(storageKey);
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const theme = stored === 'light' || stored === 'dark' ? stored : (prefersDark ? 'dark' : 'light');
        document.documentElement.setAttribute('data-bs-theme', theme);
    })();
</script>
