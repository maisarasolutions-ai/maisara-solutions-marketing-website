// resources/js/app.js

import { createApp } from 'alpinejs';

window.Alpine = createApp({
    init() {
        this.$store = {};
    }
});

Alpine.start();

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
