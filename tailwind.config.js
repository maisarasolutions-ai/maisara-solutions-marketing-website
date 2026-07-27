/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                'maisara-navy': '#1E2F45',
                'maisara-ember': '#D97A4A',
                'maisara-ivory': '#F5F0E5',
                'maisara-navy-light': '#2A4060',
                'maisara-navy-dark': '#152238',
                'maisara-ember-light': '#E88A5A',
                'maisara-ember-dark': '#C06A3A',
            },
            fontFamily: {
                'display': ['"Playfair Display"', 'serif'],
                'body': ['Inter', 'sans-serif'],
                'arabic': ['"Noto Naskh Arabic"', 'Cairo', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
