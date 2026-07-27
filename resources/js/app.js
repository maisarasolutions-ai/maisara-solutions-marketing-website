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

// Scroll-triggered animation observer for all reveal classes
document.addEventListener('DOMContentLoaded', () => {
    const revealClasses = ['.fade-in', '.fade-up', '.slide-in-left', '.slide-in-right', '.scale-in', '.reveal'];

    const allRevealElements = document.querySelectorAll(revealClasses.join(', '));

    if ('IntersectionObserver' in window && allRevealElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const delay = entry.target.style.transitionDelay || '0ms';
                    setTimeout(() => {
                        entry.target.classList.add('revealed');
                    }, parseInt(delay) || 0);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px',
        });

        allRevealElements.forEach((el) => observer.observe(el));
    } else {
        allRevealElements.forEach((el) => el.classList.add('revealed'));
    }

    // Lucide icons initialization
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
