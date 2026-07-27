@extends('layouts.app')

@section('title', __('Technology'))

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
    :title="__('Technology')"
    :subtitle="__('Our technology stack and capabilities.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
>
    <div class="mt-10">
        @include('components.shared.segment-selector')
    </div>
</x-modern.modern-hero>

<!-- Architecture Philosophy -->
<x-modern.modern-section
    :title="__('Architecture Philosophy')"
    :subtitle="__('Principles that guide every decision we make.')"
    background="default"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'shield',
            'title' => __('Sovereignty'),
            'description' => __('Built on open standards and vendor-neutral protocols to avoid lock-in.'),
        ],
        [
            'icon' => 'lock',
            'title' => __('Isolation'),
            'description' => __('Every layer designed with sovereignty, encryption, and isolation in mind.'),
        ],
        [
            'icon' => 'languages',
            'title' => __('Bilingual'),
            'description' => __('Native RTL support and Arabic NLP as core capabilities.'),
        ],
        [
            'icon' => 'brain',
            'title' => __('AI-Accelerated'),
            'description' => __('Architectures that grow with your business, not against it.'),
        ],
    ]" :columns="4" />
</x-modern.modern-section>

<!-- Stats Section -->
<section class="section-spacing bg-maisara-ivory relative overflow-hidden">
    <div class="absolute top-10 end-10 w-64 h-64 bg-maisara-ember/5 rounded-full blur-3xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-48 h-48 bg-maisara-navy-light/5 rounded-full blur-3xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 start-1/2 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -4s;"></div>
    <div class="container-modern relative z-10">
        <div class="text-center mb-12 fade-up">
            <span class="section-label">{{ __('Platform Metrics') }}</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-4">{{ __('Platform Metrics') }}</h2>
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

<!-- Comparison Section -->
<x-modern.modern-section
    :title="__('Deployment Models')"
    :subtitle="__('From advisory sprints to full managed operations, we adapt to your operational maturity.')"
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
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
