@extends('layouts.app')

@section('title', __('Referral'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Referral Program') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Referral description -->
                {{ __('Refer partners and earn rewards.') }}
            </p>
        </div>
    </div>
</section>
@endsection
