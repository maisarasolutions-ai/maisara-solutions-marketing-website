@extends('layouts.app')

@section('title', __('Deployment'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Deployment') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Deployment -->
                {{ __('Flexible deployment models tailored to your needs.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Comparison Intro -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Deployment Models') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto text-center mb-8">
            <!-- PLACEHOLDER: content/deployment/index.md comparison intro -->
            {{ __('From advisory sprints to full managed operations, we adapt to your operational maturity.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Advisory') }}</h3>
                <p class="text-gray-600">{{ __('Expert guidance for self-managed teams.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-managed') }}</h3>
                <p class="text-gray-600">{{ __('Shared responsibility for operational excellence.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Managed') }}</h3>
                <p class="text-gray-600">{{ __('Fully managed operations with SLA-backed reliability.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: CTA section -->
<section class="py-20 bg-maisara-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl font-bold mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            <!-- PLACEHOLDER: CTA description -->
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('deployment.comparison', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Compare Models') }}</a>
    </div>
</section>
@endsection
