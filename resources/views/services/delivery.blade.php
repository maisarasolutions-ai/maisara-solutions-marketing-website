@extends('layouts.app')

@section('title', __('Delivery'))

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
    :title="__('Delivery Services')"
    :subtitle="__('End-to-end implementation with measurable outcomes and accountability.')"
    :badge="__('Delivery')"
    badgeIcon="rocket"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Discuss Your Project') }}</a>
        <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Back to Services') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Stats Numbers -->
<section class="section-spacing bg-maisara-ivory relative overflow-hidden">
    <div class="absolute top-10 end-10 w-64 h-64 bg-maisara-ember/5 rounded-full blur-3xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-48 h-48 bg-maisara-navy-light/5 rounded-full blur-3xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 start-1/2 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -4s;"></div>
    <div class="container-modern relative z-10">
        <div class="text-center mb-12 fade-up">
            <span class="section-label">{{ __('By The Numbers') }}</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-4">{{ __('Delivery Excellence') }}</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                {{ __('Measurable outcomes delivered with accountability.') }}
            </p>
        </div>
        <x-modern.modern-stats :stats="[
            ['number' => '200+', 'label' => __('Projects Delivered'), 'description' => __('On time and on budget')],
            ['number' => '35+', 'label' => __('Countries Served'), 'description' => __('Global reach with local expertise')],
            ['number' => '99.9%', 'label' => __('Uptime SLA'), 'description' => __('Enterprise-grade reliability')],
            ['number' => '24/7', 'label' => __('Support Coverage'), 'description' => __('Around-the-clock assistance')],
        ]" />
    </div>
</section>

<!-- Delivery Methods -->
<x-modern.modern-section
    :title="__('Our Delivery Methods')"
    :subtitle="__('Flexible delivery approaches tailored to your organizational context and risk appetite.')"
    label="{{ __('How We Deliver') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'git-merge',
            'title' => __('Agile Delivery'),
            'description' => __('Iterative sprints with continuous feedback loops and rapid time-to-value.'),
        ],
        [
            'icon' => 'workflow',
            'title' => __('Hybrid Approach'),
            'description' => __('Structured phases with embedded flexibility for evolving requirements.'),
        ],
        [
            'icon' => 'shield-check',
            'title' => __('Governance & QA'),
            'description' => __('Rigorous quality assurance and compliance checks at every stage.'),
        ],
        [
            'icon' => 'repeat',
            'title' => __('DevOps Automation'),
            'description' => __('CI/CD pipelines and infrastructure-as-code for consistent delivery.'),
        ],
        [
            'icon' => 'users',
            'title' => __('Change Management'),
            'description' => __('Structured adoption programs ensuring teams embrace new ways of working.'),
        ],
        [
            'icon' => 'bar-chart-2',
            'title' => __('KPI Tracking'),
            'description' => __('Real-time dashboards and measurable success criteria tied to business outcomes.'),
        ],
    ]" :columns="3" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Deliver Results?')"
    :subtitle="__('Let us partner with you to bring your vision to life with measurable outcomes.')"
    buttonText="{{ __('Start Your Project') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore All Services') }}</a>
</x-modern.modern-cta>
@endsection
