@extends('layouts.app')

@section('title', __('Technology'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.04\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
    <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-maisara-ember/10 to-transparent pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="hero-glass-badge inline-block px-5 py-2 rounded-full text-maisara-ember text-sm font-bold mb-8 uppercase tracking-wider">
            {{ __('Technology') }}
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">{{ __('Technology') }}</h1>
        <p class="section-subtitle text-white/80 text-balance mb-10">
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
        <div class="text-center mb-16 fade-in">
            <span class="inline-block px-4 py-1.5 rounded-full bg-maisara-ember/10 text-maisara-ember text-sm font-bold mb-6 uppercase tracking-wider">{{ __('Philosophy') }}</span>
            <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Architecture Philosophy') }}</h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto text-center mb-0 text-balance">
                {{ __('Principles that guide every decision we make.') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="card fade-in group hover:border-maisara-ember/30">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Open Foundations') }}</h3>
                <p class="text-gray-500">{{ __('Built on open standards and vendor-neutral protocols to avoid lock-in.') }}</p>
            </div>
            <div class="card fade-in group hover:border-maisara-ember/30">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Security by Design') }}</h3>
                <p class="text-gray-500">{{ __('Every layer designed with sovereignty, encryption, and isolation in mind.') }}</p>
            </div>
            <div class="card fade-in group hover:border-maisara-ember/30">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Arabic-First') }}</h3>
                <p class="text-gray-500">{{ __('Native RTL support and Arabic NLP as core capabilities.') }}</p>
            </div>
            <div class="card fade-in group hover:border-maisara-ember/30">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Scalable by Default') }}</h3>
                <p class="text-gray-500">{{ __('Architectures that grow with your business, not against it.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="gradient-navy py-24 md:py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-maisara-navy via-maisara-navy to-maisara-navy-light opacity-80"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-maisara-ember/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/75 mb-8 max-w-3xl mx-auto text-balance">
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-base md:text-lg px-10 py-4">{{ __('Get In Touch') }}</a>
    </div>
</section>
@endsection
