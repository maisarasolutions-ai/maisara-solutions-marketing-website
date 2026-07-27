@extends('layouts.app')

@section('title', __('Deployment Comparison'))

@section('content')
<x-modern.modern-hero
    :title="__('Deployment Comparison')"
    :subtitle="__('Standalone vs Managed: understand the differences and choose the right model for your organization.')"
    :badge="__('Compare Models')"
    badgeIcon="git-compare"
/>

<x-modern.modern-section background="subtle">
    <x-modern.modern-comparison
        :title="__('Deployment Models')"
        :left="[
            'label' => __('Standalone'),
            'items' => [
                __('Full infrastructure control'),
                __('Your hosting and domain decisions'),
                __('Complete operational independence'),
                __('Higher initial investment'),
                __('Lower recurring dependency'),
            ]
        ]"
        :right="[
            'label' => __('Managed'),
            'items' => [
                __('Rapid time-to-value'),
                __('Managed security and updates'),
                __('Predictable operational costs'),
                __('Lower initial investment'),
                __('Migration to Standalone available'),
            ]
        ]"
        highlight="right"
    />

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
        <div class="card-modern fade-up">
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Standalone Best For') }}</h3>
            <ul class="space-y-3">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Organizations with technical capacity') }}</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Long-term sovereignty requirements') }}</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Maximum control over infrastructure') }}</span></li>
            </ul>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Managed Best For') }}</h3>
            <ul class="space-y-3">
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Organizations prioritizing speed') }}</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Operational simplicity') }}</span></li>
                <li class="flex items-start gap-3"><i data-lucide="check-circle-2" class="w-5 h-5 text-maisara-ember shrink-0 mt-0.5"></i><span class="text-gray-600">{{ __('Predictable operational costs') }}</span></li>
            </ul>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Choose Your Model?')"
    :subtitle="__('Let us help you select the deployment model that best fits your organization.')"
    buttonText="{{ __('Book Advisory Session') }}"
    :buttonUrl="route('contact.booking', ['locale' => app()->getLocale()])"
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
