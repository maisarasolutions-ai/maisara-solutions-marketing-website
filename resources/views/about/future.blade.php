@extends('layouts.app')

@section('title', __('Future'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Our Future') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Future vision -->
                {{ __('Building tomorrow\'s digital landscape today.') }}
            </p>
        </div>

        <!-- PLACEHOLDER: Future initiatives -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-maisara-ivory p-8 rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Regional Expansion') }}</h3>
                <p class="text-gray-600">
                    <!-- PLACEHOLDER -->
                    {{ __('Expanding our presence across the GCC and North Africa.') }}
                </p>
            </div>
            <div class="bg-maisara-ivory p-8 rounded-xl">
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Innovation Lab') }}</h3>
                <p class="text-gray-600">
                    <!-- PLACEHOLDER -->
                    {{ __('Investing in emerging technologies and local talent development.') }}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
