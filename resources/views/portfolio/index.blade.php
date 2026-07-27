@extends('layouts.app')

@section('title', __('Portfolio'))

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
    :title="__('Portfolio')"
    :subtitle="__('Case studies and evidence of our work across industries and markets.')"
    :badge="__('Portfolio & Track Record')"
    badgeIcon="briefcase"
>
    <div class="mt-10">
        @include('components.shared.segment-selector')
    </div>
</x-modern.modern-hero>

<!-- Case Studies -->
<section class="py-24 md:py-32 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Case Studies') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-10 text-balance">
            {{ __('Explore how we have helped organizations transform their digital capabilities.') }}
        </p>
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button class="px-6 py-2 bg-maisara-navy text-white rounded-full font-medium transition-all">{{ __('All') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-all">{{ __('Sovereign') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-all">{{ __('Emerging') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-all">{{ __('Established') }}</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card group cursor-pointer">
                <div class="h-48 bg-maisara-ivory rounded-xl mb-4 overflow-hidden"></div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 1</h3>
                <p class="text-gray-600">{{ __('Transformation story for a regional leader.') }}</p>
            </div>
            <div class="card group cursor-pointer">
                <div class="h-48 bg-maisara-ivory rounded-xl mb-4 overflow-hidden"></div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 2</h3>
                <p class="text-gray-600">{{ __('Growth-focused solution for an emerging venture.') }}</p>
            </div>
            <div class="card group cursor-pointer">
                <div class="h-48 bg-maisara-ivory rounded-xl mb-4 overflow-hidden"></div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 3</h3>
                <p class="text-gray-600">{{ __('Streamlined operations for an established service.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="gradient-navy py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto text-balance">
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('portfolio.case-studies', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('View All Case Studies') }}</a>
    </div>
</section>
@endsection
