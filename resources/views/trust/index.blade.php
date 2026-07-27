@extends('layouts.app')

@section('title', __('Trust'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Trust')"
    :subtitle="__('Building confidence through transparency, security, and measurable impact for every client.')"
    :badge="__('Trust & Security')"
    badgeIcon="shield-check"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('trust.data-sovereignty', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Explore Trust') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Trust Principles -->
<x-modern.modern-section :label="__('Our Principles')" background="ivory" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up text-center">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="eye" class="w-8 h-8"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Transparency') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Clear processes and open communication with every stakeholder at every touchpoint.') }}</p>
        </div>
        <div class="card-modern fade-up text-center" style="transition-delay: 100ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="shield" class="w-8 h-8"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Security') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Enterprise-grade protection for data and operations with verified standards.') }}</p>
        </div>
        <div class="card-modern fade-up text-center" style="transition-delay: 200ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="award" class="w-8 h-8"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Accountability') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Delivering on commitments with measurable outcomes and defined SLAs.') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Stats -->
<x-modern.modern-section background="navy" :label="__('By the Numbers')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl">99.9%</div>
            <div class="text-white/70 text-sm">{{ __('Uptime SLA') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl">256-bit</div>
            <div class="text-white/70 text-sm">{{ __('SSL Encryption') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl">Daily</div>
            <div class="text-white/70 text-sm">{{ __('Backup Testing') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl">24/7</div>
            <div class="text-white/70 text-sm">{{ __('Monitoring') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Trust Topics -->
<x-modern.modern-section :label="__('Trust Areas')" background="subtle">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon"><i data-lucide="lock" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Data Sovereignty') }}</h4>
            <p class="icon-card-text">{{ __('Your data belongs to you') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon"><i data-lucide="refresh-cw" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Backup & Recovery') }}</h4>
            <p class="icon-card-text">{{ __('Verified disaster recovery') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon"><i data-lucide="file-text" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Privacy Policy') }}</h4>
            <p class="icon-card-text">{{ __('Clear data practices') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon"><i data-lucide="globe" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Regional Compliance') }}</h4>
            <p class="icon-card-text">{{ __('Egypt & Saudi Arabia aligned') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Trust Built Into Every Platform')"
    :subtitle="__('Security, transparency, and accountability are not afterthoughts — they are foundational.')"
    buttonText="{{ __('Contact Us') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
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
