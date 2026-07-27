@extends('layouts.app')

@section('title', __('Home'))

@section('content')
@if($content)
    {!! $content !!}
@else
    <!-- Hero Section -->
    <section class="relative overflow-hidden gradient-navy py-20 md:py-32 lg:py-40">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.04\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-60"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-maisara-ember/8 to-transparent pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-white to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto fade-in">
                <span class="hero-glass-badge inline-block px-5 py-2 rounded-full text-maisara-ember text-sm font-bold mb-10 uppercase tracking-wider">
                    {{ __('Digital Transformation Partner') }}
                </span>
                <h1 class="font-display text-4xl md:text-5xl lg:text-7xl font-bold text-white mb-8 leading-tight text-balance">
                    {{ __('Empowering Digital Transformation in the Middle East') }}
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-white/70 mb-12 max-w-3xl mx-auto leading-relaxed">
                    {{ __('Maisara Solutions delivers advisory, design, and delivery services with deep regional expertise.') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-base md:text-lg px-10 py-4">{{ __('Start Your Journey') }}</a>
                    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline text-base md:text-lg px-10 py-4">{{ __('Explore Services') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="py-16 md:py-28 bg-maisara-ivory relative">
        <div class="absolute inset-0 bg-gradient-to-b from-white/0 via-transparent to-maisara-ivory/0 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16">
                <div class="text-center fade-in">
                    <div class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-maisara-ember mb-4">{{ __('15+') }}</div>
                    <div class="w-12 h-0.5 bg-maisara-ember/30 mx-auto mb-4"></div>
                    <p class="text-gray-600 text-base md:text-lg">{{ __('Years of Regional Expertise') }}</p>
                </div>
                <div class="text-center fade-in">
                    <div class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-maisara-ember mb-4">{{ __('200+') }}</div>
                    <div class="w-12 h-0.5 bg-maisara-ember/30 mx-auto mb-4"></div>
                    <p class="text-gray-600 text-base md:text-lg">{{ __('Projects Delivered') }}</p>
                </div>
                <div class="text-center fade-in">
                    <div class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-maisara-ember mb-4">{{ __('98%') }}</div>
                    <div class="w-12 h-0.5 bg-maisara-ember/30 mx-auto mb-4"></div>
                    <p class="text-gray-600 text-base md:text-lg">{{ __('Client Satisfaction') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Segment Paths -->
    <section class="py-24 md:py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in">
                <span class="inline-block px-4 py-1.5 rounded-full bg-maisara-ember/10 text-maisara-ember text-sm font-bold mb-6 uppercase tracking-wider">{{ __('Tailored For You') }}</span>
                <h2 class="section-title">{{ __('Choose Your Path') }}</h2>
                <p class="section-subtitle">{{ __('Select your segment to discover tailored digital transformation solutions designed for your unique needs.') }}</p>
            </div>
            <div class="fade-in">
                @include('components.shared.segment-selector')
            </div>
        </div>
    </section>

    <!-- Deployment Models -->
    <section class="py-24 md:py-32 bg-maisara-navy relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-maisara-navy via-maisara-navy to-maisara-navy-light opacity-80"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-maisara-ember/5 rounded-full blur-3xl pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-4xl mx-auto fade-in">
                <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 text-maisara-ember text-sm font-bold mb-8 uppercase tracking-wider">{{ __('Flexibility') }}</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">{{ __('Flexible Deployment Models') }}</h2>
                <p class="text-lg md:text-xl text-white/75 mb-10 max-w-3xl mx-auto leading-relaxed">
                    {{ __('From advisory sprints to full managed operations, we adapt to your needs.') }}
                </p>
                <a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-base md:text-lg px-10 py-4">{{ __('Learn More') }}</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 md:py-32 bg-maisara-ivory relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-maisara-ivory via-white to-maisara-ivory pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-3xl mx-auto text-center fade-in">
                <span class="inline-block px-4 py-1.5 rounded-full bg-maisara-ember/10 text-maisara-ember text-sm font-bold mb-8 uppercase tracking-wider">{{ __('Get Started') }}</span>
                <h2 class="section-title">{{ __('Ready to Transform?') }}</h2>
                <p class="text-lg md:text-xl text-gray-500 mb-12 leading-relaxed max-w-2xl mx-auto">
                    {{ __('Connect with our team to discuss your digital transformation goals.') }}
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-base md:text-lg px-10 py-4">{{ __('Get Started') }}</a>
                    <a href="{{ route('assessment.index', ['locale' => app()->getLocale()]) }}" class="btn-secondary text-base md:text-lg px-10 py-4">{{ __('Take Assessment') }}</a>
                </div>
            </div>
        </div>
    </section>
@endif
@endsection
