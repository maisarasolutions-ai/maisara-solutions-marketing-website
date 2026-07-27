@extends('layouts.app')

@section('title', __('Status Dashboard'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Status Dashboard') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('Real-time platform health snapshot.') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Uptime') }}</h3>
                <p class="text-gray-600">{{ $uptime ?? '99.9%' }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Incidents') }}</h3>
                <p class="text-gray-600">{{ $incidents ?? 0 }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Maintenance') }}</h3>
                <p class="text-gray-600">{{ $maintenance ?? 0 }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
