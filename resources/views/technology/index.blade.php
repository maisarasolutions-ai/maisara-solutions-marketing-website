@extends('layouts.app')

@section('title', __('Technology'))

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
    :title="__('Technology')"
    :subtitle="__('Our technology stack and platform capabilities.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
/>

<!-- Architecture Philosophy -->
<x-modern.modern-section
    :title="__('Architecture Philosophy')"
    :subtitle="__('Four non-negotiable principles that guide every platform decision.')"
    label="{{ __('Foundation') }}"
    background="default"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
        <div class="card-modern fade-up group">
            <div class="icon-card-icon mb-4">
                <i data-lucide="shield" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Sovereignty-First') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Digital assets, data, and infrastructure belong entirely to the client. No proprietary lock-in.') }}</p>
            <div class="mt-4 w-8 h-1 bg-maisara-ember rounded-full group-hover:w-12 transition-all duration-300"></div>
        </div>
        <div class="card-modern fade-up group" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="lock" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Isolation-by-Default') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Strict logical isolation for managed deployments. Complete physical independence for standalone.') }}</p>
            <div class="mt-4 w-8 h-1 bg-maisara-ember rounded-full group-hover:w-12 transition-all duration-300"></div>
        </div>
        <div class="card-modern fade-up group" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="languages" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Bilingual-From-Foundation') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Arabic and English embedded in database schemas, content types, and user flows from day one.') }}</p>
            <div class="mt-4 w-8 h-1 bg-maisara-ember rounded-full group-hover:w-12 transition-all duration-300"></div>
        </div>
        <div class="card-modern fade-up group" style="transition-delay: 300ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="brain" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('AI-Accelerated Delivery') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('AI-assisted prototyping, code generation, and testing to compress timelines without sacrificing quality.') }}</p>
            <div class="mt-4 w-8 h-1 bg-maisara-ember rounded-full group-hover:w-12 transition-all duration-300"></div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Sovereign Infrastructure Overview -->
<x-modern.modern-section
    :title="__('Sovereign Infrastructure Overview')"
    :subtitle="__('Digital independence in whichever implementation model you choose.')"
    label="{{ __('Infrastructure') }}"
    background="mesh"
    padding="large"
>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <div class="glass-panel p-8 fade-up group hover:border-maisara-ember/20 transition-all duration-300">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <i data-lucide="server" class="w-6 h-6 text-maisara-ember"></i>
                </div>
                <div>
                    <h3 class="font-display text-xl font-semibold text-maisara-navy">{{ __('Standalone') }}</h3>
                    <p class="text-xs text-maisara-ember font-semibold uppercase tracking-wider">{{ __('Fully Independent') }}</p>
                </div>
            </div>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Fully independent platform on dedicated infrastructure') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('You control hosting, domain, and infrastructure decisions') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Complete operational and strategic freedom') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Maximum control over every layer') }}</span>
                </li>
            </ul>
        </div>

        <div class="glass-panel p-8 fade-up group hover:border-maisara-ember/20 transition-all duration-300" style="transition-delay: 100ms;">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <i data-lucide="cloud" class="w-6 h-6 text-maisara-ember"></i>
                </div>
                <div>
                    <h3 class="font-display text-xl font-semibold text-maisara-navy">{{ __('Managed') }}</h3>
                    <p class="text-xs text-maisara-ember font-semibold uppercase tracking-wider">{{ __('Branded Environment') }}</p>
                </div>
            </div>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('Branded environment on the Maisara Solutions network') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('We operate infrastructure under strict logical isolation') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('You control content, strategy, and outcomes') }}</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i>
                    <span class="text-gray-600 text-sm">{{ __('SLA-backed availability and support') }}</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="mt-12 glass-panel p-6 fade-up" style="transition-delay: 200ms;">
        <div class="flex flex-col md:flex-row items-center gap-4">
            <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0">
                <i data-lucide="info" class="w-6 h-6 text-maisara-ember"></i>
            </div>
            <p class="text-gray-700 text-sm leading-relaxed text-center md:text-start">
                {{ __('Both models deliver the same platform features, the same Arabic-first quality, and the same sovereignty guarantees. The difference is operational responsibility allocation, not ownership structure.') }}
            </p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Open & Standards-Based Foundation -->
<x-modern.modern-section
    :title="__('Open & Standards-Based Foundation')"
    :subtitle="__('Built on portable, documented foundations that any qualified practitioner can extend.')"
    label="{{ __('Standards') }}"
    background="ivory"
    padding="large"
>
    <div class="icon-grid mt-8">
        <div class="icon-card fade-up">
            <div class="icon-card-icon">
                <i data-lucide="file-code" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Open Source Core') }}</h4>
            <p class="icon-card-text">{{ __('Proven frameworks with active communities') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon">
                <i data-lucide="git-branch" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Version Control') }}</h4>
            <p class="icon-card-text">{{ __('Clean, documented codebases you own') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon">
                <i data-lucide="plug" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('API-First Design') }}</h4>
            <p class="icon-card-text">{{ __('Interoperable by default') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon">
                <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Full Documentation') }}</h4>
            <p class="icon-card-text">{{ __('Comprehensive handover and guides') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 400ms;">
            <div class="icon-card-icon">
                <i data-lucide="shield-check" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('No Lock-In') }}</h4>
            <p class="icon-card-text">{{ __('Your platform, your rules') }}</p>
        </div>
        <div class="icon-card fade-up" style="transition-delay: 500ms;">
            <div class="icon-card-icon">
                <i data-lucide="refresh-cw" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Vendor Neutral') }}</h4>
            <p class="icon-card-text">{{ __('Portable across providers') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Technology Ecosystem -->
<x-modern.modern-section
    :title="__('Technology Ecosystem')"
    :subtitle="__('Reputable, enterprise-grade technology foundations aligned with regional data-residency expectations.')"
    label="{{ __('Ecosystem') }}"
    background="subtle"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="cloud" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Cloud Infrastructure') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Strategic relationships with enterprise-grade cloud providers aligned with regional data-residency requirements.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="globe" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Domain & DNS') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Reputable domain registrars and DNS providers ensuring global availability and regional compliance.') }}</p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Specialist Partners') }}</h3>
            <p class="text-sm text-gray-600 leading-relaxed">{{ __('Technology partners for specialized capabilities while maintaining architectural independence.') }}</p>
        </div>
    </div>

    <div class="text-center mt-10">
        <a href="{{ route('partners.index', ['locale' => app()->getLocale()]) }}" class="btn-glow inline-flex items-center gap-2">
            {{ __('View Partner Ecosystem') }}
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
    </div>
</x-modern.modern-section>

<!-- Deployment Models -->
<x-modern.modern-section
    :title="__('Deployment Models')"
    :subtitle="__('From advisory sprints to full managed operations, we adapt to your operational maturity.')"
    label="{{ __('Flexibility') }}"
    background="default"
    padding="large"
>
    <x-modern.modern-comparison
        :title="__('Standalone vs Managed')"
        :left="[
            'label' => __('Standalone'),
            'items' => [
                __('Full client ownership of solution'),
                __('Internal team manages operations'),
                __('Best for mature digital organizations'),
                __('Maximum control and customization'),
                __('Lower recurring dependency'),
            ],
        ]"
        :right="[
            'label' => __('Managed'),
            'items' => [
                __('Maisara manages end-to-end operations'),
                __('SLA-backed availability and support'),
                __('Ideal for rapid capability scaling'),
                __('Reduced operational overhead'),
                __('Migration to Standalone available'),
            ],
        ]"
        highlight="right"
    />
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your technology needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
