@extends('layouts.app')

@section('title', __('Partners'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Partners')"
    :subtitle="__('Our ecosystem of trusted technology and consulting partners delivering exceptional outcomes.')"
    :badge="__('Partner Ecosystem')"
    badgeIcon="handshake"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('partners.apply', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Become a Partner') }}</a>
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Contact Us') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Partners Grid -->
<x-modern.modern-section :label="__('Our Partners')" background="ivory" :padding="'large'">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="cpu" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Technology Partners') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Strategic alliances with leading platform and infrastructure providers.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Consulting Partners') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Collaborative relationships with regional advisory firms.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="share-2" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Channel Partners') }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ __('Distributors and integrators extending our reach and impact.') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Stats -->
<x-modern.modern-section background="navy" :label="__('Ecosystem Impact')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl">15+</div>
            <div class="text-white/70 text-sm">{{ __('Active Partners') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl">8</div>
            <div class="text-white/70 text-sm">{{ __('Countries') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl">50+</div>
            <div class="text-white/70 text-sm">{{ __('Joint Projects') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl">24/7</div>
            <div class="text-white/70 text-sm">{{ __('Partner Support') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- More Partners -->
<x-modern.modern-section :label="__('Partner Types')" background="subtle">
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon"><i data-lucide="cloud" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Cloud Infrastructure') }}</h4>
            <p class="icon-card-text">{{ __('Hosting and infrastructure providers') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon"><i data-lucide="git-branch" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Open Source') }}</h4>
            <p class="icon-card-text">{{ __('Framework and tooling maintainers') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon"><i data-lucide="briefcase" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Consulting') }}</h4>
            <p class="icon-card-text">{{ __('Regional advisory collaborations') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon"><i data-lucide="rocket" class="w-6 h-6"></i></div>
            <h4 class="icon-card-title">{{ __('Innovation Hubs') }}</h4>
            <p class="icon-card-text">{{ __('Technology accelerators and labs') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Grow With Us')"
    :subtitle="__('Join our partner ecosystem and deliver exceptional digital experiences together.')"
    buttonText="{{ __('Apply to Partner') }}"
    :buttonUrl="route('partners.apply', ['locale' => app()->getLocale()])"
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
