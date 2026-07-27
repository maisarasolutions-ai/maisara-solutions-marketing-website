@extends('layouts.app')

@section('title', __('Home'))

@section('content')
@if($content)
    {!! $content !!}
@else
    <!-- Hero Section -->
    <section class="relative overflow-hidden gradient-navy py-24 md:py-32">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.03\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-maisara-ember text-sm font-semibold mb-8 backdrop-blur-sm border border-white/10">
                    {{ __('Digital Transformation Partner') }}
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight text-balance">
                    {{ __('Empowering Digital Transformation in the Middle East') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/75 mb-10 max-w-3xl mx-auto leading-relaxed">
                    {{ __('Maisara Solutions delivers advisory, design, and delivery services with deep regional expertise.') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-lg px-10 py-4">{{ __('Start Your Journey') }}</a>
                    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline text-lg px-10 py-4">{{ __('Explore Services') }}</a>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-white to-transparent"></div>
    </section>

    <!-- Trust Indicators -->
    <section class="py-16 md:py-24 bg-maisara-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
                <div class="text-center">
                    <div class="font-display text-5xl md:text-6xl font-bold text-maisara-ember mb-3">15+</div>
                    <p class="text-gray-600 text-lg">{{ __('Years of Regional Expertise') }}</p>
                </div>
                <div class="text-center">
                    <div class="font-display text-5xl md:text-6xl font-bold text-maisara-ember mb-3">200+</div>
                    <p class="text-gray-600 text-lg">{{ __('Projects Delivered') }}</p>
                </div>
                <div class="text-center">
                    <div class="font-display text-5xl md:text-6xl font-bold text-maisara-ember mb-3">98%</div>
                    <p class="text-gray-600 text-lg">{{ __('Client Satisfaction') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Segment Paths -->
    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="section-title">{{ __('Choose Your Path') }}</h2>
                <p class="section-subtitle">{{ __('Select your segment to discover tailored digital transformation solutions designed for your unique needs.') }}</p>
            </div>
            @include('components.shared.segment-selector')
        </div>
    </section>

    <!-- Deployment Models -->
    <section class="py-24 md:py-32 bg-maisara-navy relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-maisara-navy via-maisara-navy to-maisara-navy-light opacity-80"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">{{ __('Flexible Deployment Models') }}</h2>
                <p class="text-xl text-white/80 mb-10 max-w-3xl mx-auto leading-relaxed">
                    {{ __('From advisory sprints to full managed operations, we adapt to your needs.') }}
                </p>
                <a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-lg px-10 py-4">{{ __('Learn More') }}</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 md:py-32 bg-maisara-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="section-title">{{ __('Ready to Transform?') }}</h2>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    {{ __('Connect with our team to discuss your digital transformation goals.') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-lg px-10 py-4">{{ __('Get Started') }}</a>
                    <a href="{{ route('assessment.index', ['locale' => app()->getLocale()]) }}" class="btn-secondary text-lg px-10 py-4">{{ __('Take Assessment') }}</a>
                </div>
            </div>
        </div>
    </section>
@endif
@endsection
