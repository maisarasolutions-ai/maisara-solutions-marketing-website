@extends('layouts.app')

@section('title', __('Future'))

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
    :title="__('Our Future')"
    :subtitle="__('Building tomorrow\'s digital landscape today.')"
    :badge="__('Roadmap')"
    badgeIcon="map"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Start the Conversation') }}</a>
        <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Back to About') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Roadmap Timeline -->
<x-modern.modern-section
    :title="__('Our Roadmap')"
    :subtitle="__('The milestones we are working toward as we expand our impact across the region.')"
    label="{{ __('Future') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-timeline :items="[
        ['date' => '2024', 'title' => __('Regional Expansion'), 'description' => __('Expanding our presence across the GCC and North Africa with new offices and local talent.')],
        ['date' => '2025', 'title' => __('Innovation Lab Launch'), 'description' => __('Investing in emerging technologies and local talent development through our regional innovation hubs.')],
        ['date' => '2026', 'title' => __('Sovereign Cloud Platform'), 'description' => __('Launching our sovereign-grade cloud infrastructure offering for government and enterprise clients.')],
        ['date' => '2027', 'title' => __('Regional Digital Index'), 'description' => __('Publishing the first comprehensive digital maturity index for the Middle East, setting the standard for regional benchmarking.')],
    ]" />

    <div class="absolute top-10 end-10 w-40 h-40 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-32 h-32 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Process / Strategic Pillars -->
<x-modern.modern-section
    :title="__('Strategic Pillars')"
    :subtitle="__('How we are turning our vision into actionable, measurable outcomes.')"
    label="{{ __('Strategy') }}"
    background="ivory"
    padding="large"
>
    <x-modern.modern-process :steps="[
        ['number' => '01', 'title' => __('Regional Expansion'), 'description' => __('Expanding our presence across the GCC and North Africa.')],
        ['number' => '02', 'title' => __('Innovation Lab'), 'description' => __('Investing in emerging technologies and local talent development.')],
        ['number' => '03', 'title' => __('Sovereign Infrastructure'), 'description' => __('Building region-owned cloud and data infrastructure for true digital sovereignty.')],
        ['number' => '04', 'title' => __('Knowledge Economy'), 'description' => __('Contributing to the regional knowledge economy through open research and community programs.')],
    ]" />

    <div class="absolute top-1/2 start-1/4 w-24 h-24 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -4s;"></div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Shape the Future?')"
    :subtitle="__('Partner with us to build the digital landscape of tomorrow—today.')"
    buttonText="{{ __('Get Started') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore Services') }}</a>
</x-modern.modern-cta>
@endsection
