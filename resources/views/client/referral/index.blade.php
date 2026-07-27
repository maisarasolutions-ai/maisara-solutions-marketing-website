@extends('layouts.app')

@section('title', __('Client Referral'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Client Referral') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Refer a partner or organization and help them unlock better digital outcomes.') }}
        </p>
        <div class="mt-10">
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>

<!-- Referral Program -->
<section class="py-24 md:py-32 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('How Referrals Work') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('A simple, transparent program that rewards mutual trust.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Introduce') }}</h3>
                <p class="text-gray-600">{{ __('Share the details of your trusted contact with us.') }}</p>
            </div>
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Connect') }}</h3>
                <p class="text-gray-600">{{ __('We align with their goals and timeline.') }}</p>
            </div>
            <div class="card text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Reward') }}</h3>
                <p class="text-gray-600">{{ __('Receive recognition and incentives for successful referrals.') }}</p>
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
