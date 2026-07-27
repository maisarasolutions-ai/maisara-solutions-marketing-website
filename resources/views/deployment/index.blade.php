@extends('layouts.app')

@section('title', __('Deployment'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Deployment') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Flexible deployment models tailored to your needs.') }}
        </p>
        <div class="mt-10">
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>

<!-- Deployment Models -->
<section class="py-24 md:py-32 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Deployment Models') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('From advisory sprints to full managed operations, we adapt to your operational maturity.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Advisory') }}</h3>
                <p class="text-gray-600">{{ __('Expert guidance for self-managed teams.') }}</p>
            </div>
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-managed') }}</h3>
                <p class="text-gray-600">{{ __('Shared responsibility for operational excellence.') }}</p>
            </div>
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Managed') }}</h3>
                <p class="text-gray-600">{{ __('Fully managed operations with SLA-backed reliability.') }}</p>
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
        <a href="{{ route('deployment.comparison', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Compare Models') }}</a>
    </div>
</section>
@endsection
