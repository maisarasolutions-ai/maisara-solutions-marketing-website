@extends('layouts.app')

@section('title', __('Services'))

@section('content')
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 md:mb-24 fade-in">
            <span class="inline-block px-4 py-1.5 rounded-full bg-maisara-ember/10 text-maisara-ember text-sm font-bold mb-6 uppercase tracking-wider">{{ __('What We Do') }}</span>
            <h1 class="section-title">{{ __('Our Services') }}</h1>
            <p class="section-subtitle">
                {{ __('Advisory-centric model with eight specialized service lines designed for the Middle East market.') }}
            </p>
        </div>

        <!-- Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <a href="{{ route('services.advisory', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Advisory') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('Strategic guidance for digital transformation initiatives.') }}</p>
            </a>

            <a href="{{ route('services.design', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Design') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('User-centered design solutions for complex business challenges.') }}</p>
            </a>

            <a href="{{ route('services.delivery', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Delivery') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('End-to-end implementation with measurable outcomes.') }}</p>
            </a>

            <a href="{{ route('services.managed-ops', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Managed Operations') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('Ongoing operations management and optimization.') }}</p>
            </a>

            <a href="{{ route('services.localization', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Localization') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('Cultural and linguistic adaptation for regional markets.') }}</p>
            </a>

            <a href="{{ route('services.industry-solutions', ['locale' => app()->getLocale()]) }}" class="card fade-in group">
                <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Industry Solutions') }}</h3>
                <p class="text-gray-500 leading-relaxed">{{ __('Tailored solutions for key regional industries.') }}</p>
            </a>
        </div>

        <!-- CTA -->
        <div class="text-center fade-in">
            <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary text-base md:text-lg px-10 py-4">{{ __('Discuss Your Needs') }}</a>
        </div>
    </div>
</section>
@endsection
