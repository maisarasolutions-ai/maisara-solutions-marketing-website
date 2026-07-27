@extends('layouts.app')

@section('title', __('Deployment Reference Cases'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Deployment Reference Cases') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/deployment/reference-cases.md -->
                {{ ('Description and details for reference cases.') }}
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/deployment/reference-cases.md -->
        </div>
    </div>
</section>
@endsection
