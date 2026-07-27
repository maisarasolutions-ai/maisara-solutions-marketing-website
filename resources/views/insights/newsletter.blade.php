@extends('layouts.app')

@section('title', __('Insights Newsletter'))

@section('content')
@if(session('status'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-green-50 border border-green-200 text-green-800 p-4 rounded-lg">{{ session('status') }}</div>
    </div>
@endif
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Insights Newsletter') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('Description and details for newsletter.') }}
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <form method="POST" action="{{ route('insights.newsletter.subscribe', app()->getLocale()) }}" class="flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                @csrf
                <label class="sr-only" for="newsletter-email">{{ __('Email') }}</label>
                <input id="newsletter-email" type="email" name="email" placeholder="you@example.com" class="flex-1 rounded-lg border-gray-300" required>
                <button type="submit" class="btn-primary">{{ __('Subscribe') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
