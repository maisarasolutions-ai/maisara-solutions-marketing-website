@extends('layouts.app')

@section('title', __('Insights'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Insights')"
    :subtitle="__('Stay informed with our latest analysis, research, and thought leadership on digital transformation.')"
    :badge="__('Insights & Research')"
    badgeIcon="lightbulb"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Subscribe') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Insights Grid -->
<x-modern.modern-section :label="__('Latest Insights')" background="ivory" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="search" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Research') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Deep dives into market trends and technology outlooks for the region.') }}</p>
            <a href="#" class="inline-flex items-center gap-1 text-maisara-ember font-semibold text-sm mt-4 hover:gap-2 transition-all duration-200">
                {{ __('Explore') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Case Studies') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Evidence-based stories from our client engagements across sectors.') }}</p>
            <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="inline-flex items-center gap-1 text-maisara-ember font-semibold text-sm mt-4 hover:gap-2 transition-all duration-200">
                {{ __('View Case Studies') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="message-square" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Perspectives') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Opinions and interviews from our leadership team on strategy and innovation.') }}</p>
            <a href="#" class="inline-flex items-center gap-1 text-maisara-ember font-semibold text-sm mt-4 hover:gap-2 transition-all duration-200">
                {{ __('Read More') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</x-modern.modern-section>

<!-- Stats -->
<x-modern.modern-section background="navy" :label="__('By the Numbers')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
            <div class="text-white/70 text-sm">{{ __('Projects Delivered') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl font-bold text-white mb-2">12</div>
            <div class="text-white/70 text-sm">{{ __('Countries Served') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl font-bold text-white mb-2">98%</div>
            <div class="text-white/70 text-sm">{{ __('Client Satisfaction') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl font-bold text-white mb-2">24/7</div>
            <div class="text-white/70 text-sm">{{ __('Support Coverage') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Topics Grid -->
<x-modern.modern-section :label="__('Topics')" background="subtle">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon">
                <i data-lucide="trending-up" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Market Trends') }}</h4>
            <p class="icon-card-text">{{ __('Analysis of regional digital transformation patterns') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon">
                <i data-lucide="cpu" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Technology') }}</h4>
            <p class="icon-card-text">{{ __('Emerging tech and platform decisions') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Leadership') }}</h4>
            <p class="icon-card-text">{{ __('Interviews and perspectives from our team') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon">
                <i data-lucide="globe" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Regional') }}</h4>
            <p class="icon-card-text">{{ __('Egypt and Saudi Arabia market insights') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Stay Ahead of the Curve')"
    :subtitle="__('Get the latest insights delivered to your inbox. No spam, just strategic thinking.')"
    buttonText="{{ __('Subscribe to Insights') }}"
    :buttonUrl="route('insights.newsletter', ['locale' => app()->getLocale()])"
/>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush
@endsection
