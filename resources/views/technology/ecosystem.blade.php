@extends('layouts.app')

@section('title', __('Technology Ecosystem'))

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Technology Ecosystem')"
    :subtitle="__('Reputable, enterprise-grade technology foundations aligned with regional data-residency expectations.')"
    :badge="__('Ecosystem')"
    badgeIcon="cloud"
/>

<!-- Ecosystem Overview -->
<x-modern.modern-section background="default" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="cloud" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Cloud Infrastructure') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">
                {{ __('Strategic relationships with enterprise-grade cloud providers aligned with regional data-residency requirements.') }}
            </p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="globe" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Domain & DNS') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">
                {{ __('Reputable domain registrars and DNS providers ensuring global availability and regional compliance.') }}
            </p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Specialist Partners') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">
                {{ __('Technology partners for specialized capabilities while maintaining architectural independence.') }}
            </p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Independence Guarantee -->
<x-modern.modern-section :label="__('Our Commitment')" background="ivory">
    <div class="glass-panel p-8 md:p-12 fade-up">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center">
                    <i data-lucide="shield-check" class="w-5 h-5 text-maisara-ember"></i>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy">{{ __('Architectural Independence') }}</h3>
            </div>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ __('We architect every client platform for independence from any single vendor. Our value is in what we deliver and how we deliver it — not in proprietary lock-in that traps you in dependency.') }}
            </p>
            <a href="{{ route('partners.index', ['locale' => app()->getLocale()]) }}" class="btn-glow inline-flex items-center gap-2">
                {{ __('View Partner Ecosystem') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Build Together?')"
    :subtitle="__ __('Let us discuss your technology ecosystem and infrastructure requirements.')"
    buttonText="{{ __('Contact Us') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
