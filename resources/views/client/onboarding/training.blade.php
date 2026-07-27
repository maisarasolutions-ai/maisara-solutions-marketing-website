@extends('layouts.app')

@section('title', __('Client Onboarding Training'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Client Onboarding Training') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/client/onboarding/training.md -->
                {{ ('Description and details for training.') }}
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/client/onboarding/training.md -->
        </div>
    </div>
</section>
@endsection
