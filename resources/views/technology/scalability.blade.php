@extends('layouts.app')

@section('title', __('Technology Scalability'))

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
    :title="__('Technology Scalability')"
    :subtitle="__('Description and details for scalability.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Technology') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Scalability Features -->
<x-modern.modern-section
    :title="__('Scalability Features')"
    :subtitle="__('Built to grow with your business, not against it.')"
    label="{{ __('Growth') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        ['icon' => 'server', 'title' => __('Elastic Infrastructure'), 'description' => __('Auto-scaling infrastructure that adapts to demand in real-time.')],
        ['icon' => 'cloud', 'title' => __('Cloud-Native Architecture'), 'description' => __('Designed for cloud deployment with containerized microservices.')],
        ['icon' => 'git-branch', 'title' => __('Modular Design'), 'description' => __('Independent modules that can be scaled individually as needed.')],
        ['icon' => 'bar-chart-3', 'title' => __('Performance Monitoring'), 'description' => __('Real-time performance tracking and capacity planning.')],
        ['icon' => 'shield', 'title' => __('High Availability'), 'description' => __('Multi-region redundancy with 99.9% uptime SLA.')],
        ['icon' => 'users', 'title' => __('Multi-Tenancy'), 'description' => __('Secure multi-tenant architecture for serving diverse clients.')],
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

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
