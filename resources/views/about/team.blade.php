@extends('layouts.app')

@section('title', __('Team'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Our Team') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Team description -->
                {{ __('A diverse team of experts committed to delivering excellence.') }}
            </p>
        </div>

        <!-- PLACEHOLDER: Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Team cards will be populated here -->
        </div>
    </div>
</section>
@endsection
