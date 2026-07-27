@extends('layouts.app')

@section('title', __('Technology'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Technology') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Our technology stack and capabilities.') }}
        </p>
        <div class="mt-10">
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>

<!-- Architecture Philosophy -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Architecture Philosophy') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('Principles that guide every decision we make.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Open Foundations') }}</h3>
                <p class="text-gray-600">{{ __('Built on open standards and vendor-neutral protocols to avoid lock-in.') }}</p>
            </div>
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Security by Design') }}</h3>
                <p class="text-gray-600">{{ __('Every layer designed with sovereignty, encryption, and isolation in mind.') }}</p>
            </div>
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Arabic-First') }}</h3>
                <p class="text-gray-600">{{ __('Native RTL support and Arabic NLP as core capabilities.') }}</p>
            </div>
            <div class="card">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Scalable by Default') }}</h3>
                <p class="text-gray-600">{{ __('Architectures that grow with your business, not against it.') }}</p>
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
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Explore Technology') }}</a>
    </div>
</section>
@endsection
