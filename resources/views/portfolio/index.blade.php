@extends('layouts.app')

@section('title', __('Portfolio'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Portfolio') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Portfolio -->
                {{ __('Case studies and evidence of our work.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Filter Tabs -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Case Studies') }}</h2>
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <!-- PLACEHOLDER: content/portfolio/index.md filter tabs -->
            <button class="px-6 py-2 bg-maisara-navy text-white rounded-full">{{ __('All') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Sovereign') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Emerging') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Established') }}</button>
        </div>
        <!-- PLACEHOLDER: Case study grid from content/portfolio/index.md -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 1</h3>
                    <p class="text-gray-600">{{ __('Transformation story for a regional leader.') }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 2</h3>
                    <p class="text-gray-600">{{ __('Growth-focused solution for an emerging venture.') }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 3</h3>
                    <p class="text-gray-600">{{ __('Streamlined operations for an established service.') }}</p>
                </div>
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
        <a href="{{ route('portfolio.case-studies', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('View All Case Studies') }}</a>
    </div>
</section>
@endsection
