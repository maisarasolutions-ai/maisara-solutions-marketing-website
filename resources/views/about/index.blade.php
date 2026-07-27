@extends('layouts.app')

@section('title', __('About Us'))

@section('content')
<!-- PLACEHOLDER: Company Story -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('About Maisara Solutions') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Company story -->
                {{ __('A regional leader in digital transformation, combining deep Middle Eastern expertise with global best practices.') }}
            </p>
        </div>

        <!-- MVV Three Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <div class="text-center p-8 bg-maisara-ivory rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-ember mb-4">{{ __('Mission') }}</h3>
                <p class="text-gray-600">
                    <!-- PLACEHOLDER: Mission -->
                    {{ __('To empower organizations across the Middle East with transformative digital solutions.') }}
                </p>
            </div>
            <div class="text-center p-8 bg-maisara-ivory rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-ember mb-4">{{ __('Vision') }}</h3>
                <p class="text-gray-600">
                    <!-- PLACEHOLDER: Vision -->
                    {{ __('To be the most trusted digital transformation partner in the region.') }}
                </p>
            </div>
            <div class="text-center p-8 bg-maisara-ivory rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-ember mb-4">{{ __('Values') }}</h3>
                <p class="text-gray-600">
                    <!-- PLACEHOLDER: Values -->
                    {{ __('Excellence, integrity, collaboration, and regional commitment.') }}
                </p>
            </div>
        </div>

        <!-- PLACEHOLDER: Founding Narrative -->
        <div class="bg-white rounded-xl shadow-md p-8 md:p-12">
            <h2 class="font-display text-3xl font-bold text-maisara-navy mb-6">{{ __('Our Story') }}</h2>
            <p class="text-gray-600 leading-relaxed">
                <!-- PLACEHOLDER: Founding narrative -->
                {{ __('Founded in Cairo with a vision to bridge global technology excellence with regional business realities...') }}
            </p>
        </div>
    </div>
</section>
@endsection
