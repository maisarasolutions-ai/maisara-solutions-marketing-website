// resources/js/app.js

// Global utilities
window.toggleMobileMenu = () => {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
};

window.toggleLanguage = (locale) => {
    const currentPath = window.location.pathname;
    const segments = currentPath.split('/');
    if (segments[1] === 'en' || segments[1] === 'ar') {
        segments[1] = locale;
    } else {
        segments.splice(1, 0, locale);
    }
    const newPath = segments.join('/');
    window.location.href = newPath;
};

// Fade-in on scroll observer
document.addEventListener('DOMContentLoaded', () => {
    const fadeElements = document.querySelectorAll('.fade-in');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * 80);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px',
        });

        fadeElements.forEach((el) => observer.observe(el));
    } else {
        fadeElements.forEach((el) => el.classList.add('visible'));
    }
});
