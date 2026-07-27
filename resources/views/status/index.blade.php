@extends('layouts.app')

@section('title', __('System Status'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('System Status') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('Real-time operational status for all Maisara Solutions services.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white rounded-xl shadow-md p-6 flex items-center justify-between">
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
