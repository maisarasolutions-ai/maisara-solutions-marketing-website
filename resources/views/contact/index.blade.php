@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Contact Us') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Contact intro -->
                {{ __('Connect with our team across Egypt and Saudi Arabia.') }}
            </p>
        </div>

        <!-- Regional Routing -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-maisara-ivory p-8 rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Egypt') }}</h3>
                <p class="text-gray-600 mb-2">{{ __('Cairo') }}</p>
                <a href="mailto:egypt@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark">egypt@maisara-solutions.com</a>
            </div>
            <div class="bg-maisara-ivory p-8 rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Saudi Arabia') }}</h3>
                <p class="text-gray-600 mb-2">{{ __('Riyadh') }}</p>
                <a href="mailto:saudi@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark">saudi@maisara-solutions.com</a>
            </div>
        </div>

        <!-- Segment Paths -->
        <div class="text-center">
            <h2 class="font-display text-2xl font-bold text-maisara-navy mb-6">{{ __('How Can We Help?') }}</h2>
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>
@endsection
