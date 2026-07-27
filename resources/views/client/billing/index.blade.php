@extends('layouts.app')

@section('title', __('Client Billing'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Client Billing') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Transparent, predictable billing aligned to your engagement model.') }}
        </p>
        <div class="mt-10">
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>

<!-- Billing Information -->
<section class="py-24 md:py-32 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Billing Options') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('Flexible payment models designed for clarity and control.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Subscription') }}</h3>
                <p class="text-gray-600">{{ __('Predictable recurring pricing for ongoing services.') }}</p>
            </div>
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Project') }}</h3>
                <p class="text-gray-600">{{ __('Fixed-scope engagements with clear deliverable milestones.') }}</p>
            </div>
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Pay-As-You-Go') }}</h3>
                <p class="text-gray-600">{{ __('Consumption-based billing for flexible workloads.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="gradient-navy py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto text-balance">
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Contact Us') }}</a>
    </div>
</section>
@endsection
