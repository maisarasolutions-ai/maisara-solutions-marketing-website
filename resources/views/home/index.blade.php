@extends('layouts.app')

@section('title', __('Home'))

@section('content')
@if($content)
    {!! $content !!}
@else
    <!-- PLACEHOLDER: Hero Section - Maisara intro -->
    <section class="bg-maisara-navy text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="font-display text-4xl md:text-6xl font-bold mb-6">
                    {{ __('Empowering Digital Transformation in the Middle East') }}
                </h1>
                <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
                    {{ __('Maisara Solutions delivers advisory, design, and delivery services with deep regional expertise.') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Start Your Journey') }}</a>
                    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore Services') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PLACEHOLDER: Trust Indicators -->
    <section class="py-12 bg-maisara-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="font-display text-4xl font-bold text-maisara-ember mb-2">15+</div>
                    <p class="text-gray-600">{{ __('Years of Regional Expertise') }}</p>
                </div>
                <div>
                    <div class="font-display text-4xl font-bold text-maisara-ember mb-2">200+</div>
                    <p class="text-gray-600">{{ __('Projects Delivered') }}</p>
                </div>
                <div>
                    <div class="font-display text-4xl font-bold text-maisara-ember mb-2">98%</div>
                    <p class="text-gray-600">{{ __('Client Satisfaction') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PLACEHOLDER: Segment Paths -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Choose Your Path') }}</h2>
            @include('components.shared.segment-selector')
        </div>
    </section>

    <!-- PLACEHOLDER: Deployment Models Intro -->
    <section class="py-20 bg-maisara-navy text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl font-bold mb-6">{{ __('Flexible Deployment Models') }}</h2>
            <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
                {{ __('From advisory sprints to full managed operations, we adapt to your needs.') }}
            </p>
            <a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Learn More') }}</a>
        </div>
    </section>

    <!-- PLACEHOLDER: CTAs -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display text-3xl font-bold text-maisara-navy mb-6">{{ __('Ready to Transform?') }}</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                {{ __('Connect with our team to discuss your digital transformation goals.') }}
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Get Started') }}</a>
                <a href="{{ route('assessment.index', ['locale' => app()->getLocale()]) }}" class="btn-secondary">{{ __('Take Assessment') }}</a>
            </div>
        </div>
    </section>
@endif
@endsection
