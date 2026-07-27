@extends('layouts.app')

@section('title', __('Talent'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Talent')"
    :subtitle="__('Grow your career with a team that values curiosity, craft, and impact.')"
    :badge="__('Careers')"
    badgeIcon="users"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('talent.open-positions', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('View Open Positions') }}</a>
        <a href="{{ route('talent.apply', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Apply Now') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Open Positions -->
<x-modern.modern-section :label="__('Open Positions')" background="ivory" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="code" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Engineering') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Software, infrastructure, and security engineering roles.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Consulting') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Architects and advisors to guide client transformation.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="headphones" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Operations') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Delivery, support, and customer success roles.') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Stats -->
<x-modern.modern-section background="navy" :label="__('By the Numbers')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl">25+</div>
            <div class="text-white/70 text-sm">{{ __('Team Members') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl">8</div>
            <div class="text-white/70 text-sm">{{ __('Countries') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl">95%</div>
            <div class="text-white/70 text-sm">{{ __('Retention Rate') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl">4.8</div>
            <div class="text-white/70 text-sm">{{ __('Glassdoor Rating') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Benefits -->
<x-modern.modern-section :label="__('Benefits')" background="subtle">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon"><i data-lucide="heart" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Health & Wellness') }}</h4>
            <p class="icon-card-text">{{ __('Comprehensive health coverage') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon"><i data-lucide="plane" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Remote Work') }}</h4>
            <p class="icon-card-text">{{ __('Flexible location options') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon"><i data-lucide="book-open" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Learning Budget') }}</h4>
            <p class="icon-card-text">{{ __('Annual growth allowance') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon"><i data-lucide="trending-up" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Career Path') }}</h4>
            <p class="icon-card-text">{{ __('Clear growth trajectory') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Join Our Team')"
    :subtitle="__('Help us build the future of digital transformation in the Middle East.')"
    buttonText="{{ __('View Open Positions') }}"
    :buttonUrl="route('talent.open-positions', ['locale' => app()->getLocale()])"
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
