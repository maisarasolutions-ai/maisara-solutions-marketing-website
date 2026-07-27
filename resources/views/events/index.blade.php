@extends('layouts.app')

@section('title', __('Events'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Events')"
    :subtitle="__('Join us at upcoming summits, workshops, and industry gatherings across the region.')"
    :badge="__('Events & Workshops')"
    badgeIcon="calendar"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('events.webinars', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Upcoming Events') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Events Grid -->
<x-modern.modern-section :label="__('What We Offer')" background="ivory" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="mic" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Summits') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Regional leadership forums and keynote events.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="hammer" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Workshops') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Hands-on sessions for practitioners and decision-makers.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="video" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Webinars') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Virtual learning experiences covering trending topics.') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Stats -->
<x-modern.modern-section background="navy" :label="__('By the Numbers')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl">30+</div>
            <div class="text-white/70 text-sm">{{ __('Events Hosted') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl">5K+</div>
            <div class="text-white/70 text-sm">{{ __('Attendees') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl">12</div>
            <div class="text-white/70 text-sm">{{ __('Cities') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl">4.9</div>
            <div class="text-white/70 text-sm">{{ __('Avg Rating') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Join Us at the Next Event')"
    :subtitle="__('Connect with our team and learn about the latest in technology and strategy.')"
    buttonText="{{ __('View All Events') }}"
    :buttonUrl="route('events.calendar', ['locale' => app()->getLocale()])"
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
