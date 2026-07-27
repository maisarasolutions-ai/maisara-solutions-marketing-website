@extends('layouts.app')

@section('title', __('Services'))

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
    :title="__('Our Services')"
    :subtitle="__('Advisory-centric model with eight specialized service lines designed for the Middle East market.')"
    :badge="__('What We Deliver')"
    badgeIcon="sparkles"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Discuss Your Needs') }}</a>
        <a href="{{ route('services.advisory', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore Advisory') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Service Stack -->
<x-modern.modern-section
    :title="__('Our Services')"
    :subtitle="__('Eight specialized service lines designed for the Middle East market.')"
    label="{{ __('What We Deliver') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'lightbulb',
            'title' => __('Advisory'),
            'description' => __('Strategic guidance for digital transformation initiatives.'),
        ],
        [
            'icon' => 'layout',
            'title' => __('Design'),
            'description' => __('User-centered design solutions for complex business challenges.'),
        ],
        [
            'icon' => 'zap',
            'title' => __('Delivery'),
            'description' => __('End-to-end implementation with measurable outcomes.'),
        ],
        [
            'icon' => 'cloud',
            'title' => __('Managed Operations'),
            'description' => __('Ongoing operations management and optimization.'),
        ],
        [
            'icon' => 'globe',
            'title' => __('Localization'),
            'description' => __('Cultural and linguistic adaptation for regional markets.'),
        ],
        [
            'icon' => 'building-2',
            'title' => __('Industry Solutions'),
            'description' => __('Tailored solutions for key regional industries.'),
        ],
        [
            'icon' => 'rocket',
            'title' => __('Enablement'),
            'description' => __('Building internal capabilities for sustained digital success.'),
        ],
        [
            'icon' => 'shield',
            'title' => __('Sovereignty'),
            'description' => __('Solutions that respect and enable regional digital sovereignty.'),
        ],
    ]" :columns="4" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Metrics -->
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

<!-- Deployment Comparison -->
<x-modern.modern-section
    :title="__('Deployment Models')"
    :subtitle="__('From advisory sprints to full managed operations, we adapt to your needs.')"
    label="{{ __('Flexibility') }}"
    background="default"
    padding="large"
>
    <x-modern.modern-comparison
        :title="__('Standalone vs Managed Deployment')"
        :left="[
            'label' => __('Standalone'),
            'items' => [
                __('Full client ownership of solution'),
                __('Internal team manages operations'),
                __('Best for mature digital organizations'),
                __('Maximum control and customization'),
            ],
        ]"
        :right="[
            'label' => __('Managed'),
            'items' => [
                __('Maisara manages end-to-end operations'),
                __('SLA-backed availability and support'),
                __('Ideal for rapid capability scaling'),
                __('Reduced operational overhead'),
            ],
        ]"
        highlight="right"
    />

    <div class="absolute top-10 end-10 w-40 h-40 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-32 h-32 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Transform?')"
    :subtitle="__('Connect with our team to discuss your digital transformation goals.')"
    buttonText="{{ __('Get Started') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('services.advisory', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore Services') }}</a>
</x-modern.modern-cta>
@endsection
