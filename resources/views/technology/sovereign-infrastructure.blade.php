@extends('layouts.app')

@section('title', __('Sovereign Infrastructure'))

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
    :title="__('Sovereign Infrastructure')"
    :subtitle="__('Digital independence in whichever implementation model you choose.')"
    :badge="__('Infrastructure')"
    badgeIcon="server"
/>

<!-- Split Overview -->
<x-modern.modern-section background="default" :padding="'large'">
    <div class="split-section">
        <div class="fade-up">
            <span class="section-label">{{ __('Standalone') }}</span>
            <h2 class="font-display text-3xl font-bold text-maisara-navy mb-4">{{ __('Full Independence') }}</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ __('Fully independent platform on dedicated infrastructure. You control hosting, domain, and infrastructure decisions. Complete operational and strategic freedom.') }}
            </p>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Full client ownership of solution') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Internal team manages operations') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Best for mature digital organizations') }}</span>
                </li>
            </ul>
        </div>
        <div class="fade-up" style="transition-delay: 150ms;">
            <span class="section-label">{{ __('Managed') }}</span>
            <h2 class="font-display text-3xl font-bold text-maisara-navy mb-4">{{ __('Branded Environment') }}</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ __('Branded environment on the Maisara Solutions network. We operate infrastructure under strict logical isolation. You control platform content, strategy, and outcomes.') }}
            </p>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Maisara manages end-to-end operations') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('SLA-backed availability and support') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Migration to Standalone available') }}</span>
                </li>
            </ul>
        </div>
    </div>
</x-modern.modern-section>

<!-- Key Principles -->
<x-modern.modern-section :label="__('Key Principles')" background="ivory">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon"><i data-lucide="shield" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Ownership') }}</h4>
            <p class="icon-card-text">{{ __('You own your digital assets') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon"><i data-lucide="lock" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Isolation') }}</h4>
            <p class="icon-card-text">{{ __('Strict separation guarantees') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon"><i data-lucide="key" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Control') }}</h4>
            <p class="icon-card-text">{{ __('You set the boundaries') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon"><i data-lucide="refresh-cw" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Flexibility') }}</h4>
            <p class="icon-card-text">{{ __('Evolve on your terms') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Discuss Infrastructure?')"
    :subtitle="__('Let us help you select the right sovereignty model for your organization.')"
    buttonText="{{ __('Book Advisory Session') }}"
    :buttonUrl="route('contact.booking', ['locale' => app()->getLocale()])"
/>
@endsection
