@extends('layouts.app')

@section('title', __('Client Billing Plan Overview'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Client Billing Plan Overview') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('Description and details for plan overview.') }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($plans as $plan)
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ $plan['name'] }}</h3>
                    <p class="text-gray-600">{{ $plan['price'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
