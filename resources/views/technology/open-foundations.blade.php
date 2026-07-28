@extends('layouts.app')

@section('title', __('Open & Standards-Based Foundation'))

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
    :title="__('Open & Standards-Based Foundation')"
    :subtitle="__('Built on portable, documented foundations that any qualified practitioner can extend.')"
    :badge="__('Standards')"
    badgeIcon="file-code"
/>

<!-- Core Principles -->
<x-modern.modern-section background="default" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="glass-panel p-8 fade-up">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center">
                    <i data-lucide="shield-check" class="w-5 h-5 text-maisara-ember"></i>
                </div>
                <h3 class="font-display text-lg font-semibold text-maisara-navy">{{ __('No Lock-In') }}</h3>
            </div>
            <p class="text-sm text-gray-600 leading-relaxed">
                {{ __('Your platform is built on portable, documented foundations. You can extend it, migrate it, or hand it to a new team with confidence.') }}
            </p>
        </div>
        <div class="glass-panel p-8 fade-up" style="transition-delay: 100ms;">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center">
                    <i data-lucide="book-open" class="w-5 h-5 text-maisara-ember"></i>
                </div>
                <h3 class="font-display text-lg font-semibold text-maisara-navy">{{ __('Full Documentation') }}</h3>
            </div>
            <p class="text-sm text-gray-600 leading-relaxed">
                {{ __('Comprehensive handover documentation, inline code comments, and architectural guides that future teams can actually use.') }}
            </p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Standards Grid -->
<x-modern.modern-section :label="__('Our Standards')" background="mesh">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon"><i data-lucide="file-code" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Open Source') }}</h4>
            <p class="icon-card-text">{{ __('Proven frameworks with active communities') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon"><i data-lucide="git-branch" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Version Control') }}</h4>
            <p class="icon-card-text">{{ __('Clean, documented codebases you own') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon"><i data-lucide="plug" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('API-First') }}</h4>
            <p class="icon-card-text">{{ __('Interoperable by design') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon"><i data-lucide="refresh-cw" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Vendor Neutral') }}</h4>
            <p class="icon-card-text">{{ __('Portable across providers') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Long-term concern -->
<x-modern.modern-section background="ivory">
    <div class="glass-panel p-8 md:p-12 fade-up">
        <div class="max-w-3xl mx-auto text-center">
            <div class="w-16 h-16 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <i data-lucide="help-circle" class="w-8 h-8 text-maisara-ember"></i>
            </div>
            <h3 class="font-display text-2xl font-bold text-maisara-navy mb-4">{{ __('What happens if we want to change providers?') }}</h3>
            <p class="text-gray-600 leading-relaxed mb-6">
                {{ __('Your platform is built on portable, documented foundations. You can extend it, migrate it, or hand it to a new team with confidence. Our value is in what we deliver and how we deliver it — not in proprietary lock-in that traps you in dependency.') }}
            </p>
            <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow inline-flex items-center gap-2">
                {{ __('Discuss Your Concerns') }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Built to Last')"
    :subtitle="__('Open standards, full documentation, and zero lock-in. That is our promise.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
