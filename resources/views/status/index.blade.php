@extends('layouts.app')

@section('title', __('System Status'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('System Status') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Real-time operational status for all Maisara Solutions services.') }}
        </p>
    </div>
</section>

<!-- Services Status -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Service Status') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('Live monitoring and incident transparency.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($services as $service)
                <div class="card flex items-center justify-between">
                    <div>
                        <h3 class="font-display text-xl font-semibold text-maisara-navy">{{ $service['name'] }}</h3>
                        <p class="text-gray-600 capitalize">{{ __('Status') }}: {{ $service['status'] }}</p>
                    </div>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                        {{ __('Operational') }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
