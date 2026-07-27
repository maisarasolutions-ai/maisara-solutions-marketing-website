@extends('layouts.app')

@section('title', __('Technology'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Technology') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Technology -->
                {{ __('Our technology stack and capabilities.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Architecture Philosophy -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Architecture Philosophy') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Open Foundations') }}</h3>
                <p class="text-gray-600">{{ __('Built on open standards and vendor-neutral protocols to avoid lock-in.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Security by Design') }}</h3>
                <p class="text-gray-600">{{ __('Every layer designed with sovereignty, encryption, and isolation in mind.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Arabic-First') }}</h3>
                <p class="text-gray-600">{{ __('Native RTL support and Arabic NLP as core capabilities.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Scalable by Default') }}</h3>
                <p class="text-gray-600">{{ __('Architectures that grow with your business, not against it.') }}</p>
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
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Explore Technology') }}</a>
    </div>
</section>
@endsection
