@extends('layouts.app')

@section('title', __('About Us'))

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        ['fade-in', 'fade-up'].forEach(function(className) {
            var elements = document.querySelectorAll('.' + className);
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
                elements.forEach(function(el) { observer.observe(el); });
            } else {
                elements.forEach(function(el) { el.classList.add('visible'); });
            }
        });
    });
</script>
@endpush

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('About Maisara Solutions')"
    :subtitle="__('A regional leader in digital transformation, combining deep Middle Eastern expertise with global best practices.')"
    :badge="__('MVV')"
    badgeIcon="shield-check"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('about.founder', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Meet the Founder') }}</a>
        <a href="{{ route('about.team', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Our Team') }}</a>
    </div>
</x-modern.modern-hero>

<!-- MVV Section -->
<x-modern.modern-section
    :title="__('Mission, Vision & Values')"
    :subtitle="__('The principles that guide every engagement, every solution, and every relationship we build.')"
    label="{{ __('Our Foundation') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'compass',
            'title' => __('Mission'),
            'description' => __('To empower organizations across the Middle East with transformative digital solutions.'),
        ],
        [
            'icon' => 'eye',
            'title' => __('Vision'),
            'description' => __('To be the most trusted digital transformation partner in the region.'),
        ],
        [
            'icon' => 'heart',
            'title' => __('Values'),
            'description' => __('Excellence, integrity, collaboration, and regional commitment.'),
        ],
    ]" :columns="3" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Stats Section -->
<section class="section-spacing bg-maisara-ivory relative overflow-hidden">
    <div class="absolute top-10 end-10 w-64 h-64 bg-maisara-ember/5 rounded-full blur-3xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-48 h-48 bg-maisara-navy-light/5 rounded-full blur-3xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 start-1/2 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -4s;"></div>
    <div class="container-modern relative z-10">
        <div class="text-center mb-12 fade-up">
            <span class="section-label">{{ __('Impact') }}</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-4">{{ __('Our Impact') }}</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                {{ __('Delivering excellence across the Middle East and beyond.') }}
            </p>
        </div>
        <x-modern.modern-stats :stats="[
            ['number' => '15+', 'label' => __('Years of Regional Expertise'), 'description' => __('Trusted across the Middle East')],
            ['number' => '200+', 'label' => __('Projects Delivered'), 'description' => __('Across diverse industries')],
            ['number' => '98%', 'label' => __('Client Satisfaction'), 'description' => __('Driving measurable impact')],
            ['number' => '50+', 'label' => __('Team Members'), 'description' => __('Diverse expertise')],
        ]" />
    </div>
</section>

<!-- Story Section -->
<x-modern.modern-section
    :title="__('Our Story')"
    label="{{ __('History') }}"
    background="subtle"
    padding="large"
>
    <div class="max-w-4xl mx-auto fade-up">
        <div class="card-modern">
            <p class="text-gray-600 text-lg leading-relaxed">
                {{ __('Founded in Cairo with a vision to bridge global technology excellence with regional business realities, Maisara Solutions has grown into a trusted digital transformation partner serving clients across the Middle East and beyond.') }}
            </p>
        </div>
    </div>
</x-modern.modern-section>
@endsection
