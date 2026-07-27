@extends('layouts.app')

@section('title', __('Deployment'))

@php
    $sections = $contentSections ?? [];
    $content = null;
@endphp

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
    :title="__('Deployment Models')"
    :subtitle="__('Flexible deployment models tailored to your needs, combining operational responsibility with quality assurance.')"
    :badge="__('Deployment Models')"
    badgeIcon="layers"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('deployment.comparison', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Compare Models') }}</a>
        <a href="{{ route('contact.booking', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Book a Session') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Segment Selector -->
<section class="py-16 md:py-24 bg-white relative">
    <div class="container-modern relative z-10">
        <div class="text-center mb-12 fade-up">
            <span class="section-label">{{ __('Choose Your Path') }}</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-4">{{ __('Select Your Segment') }}</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                {{ __('Every deployment model is adapted to your operational maturity. Select your segment to discover the ideal path.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- Markdown Content -->
@php
    $renderSections = $sections;
    if (!empty($renderSections) && str_starts_with(trim(strip_tags($renderSections[0])), '<h1')) {
        array_shift($renderSections);
    }
@endphp

@if(count($renderSections) > 0)
    <x-modern.modern-content-renderer :sections="$renderSections" />
@endif

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your deployment strategy.')"
    buttonText="{{ __('Compare Models') }}"
    :buttonUrl="route('deployment.comparison', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Contact Us') }}</a>
</x-modern.modern-cta>
@endsection
