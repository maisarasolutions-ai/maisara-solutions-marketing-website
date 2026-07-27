@extends('layouts.app')

@section('title', __('Founder'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Our Founder') }}</h1>
        </div>
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-xl shadow-md p-8 md:p-12 text-center">
                <div class="w-32 h-32 bg-maisara-ivory rounded-full mx-auto mb-6 flex items-center justify-center">
                    <span class="font-display text-4xl font-bold text-maisara-ember">M</span>
                </div>
                <h2 class="font-display text-3xl font-bold text-maisara-navy mb-2">Mohamed Maisara</h2>
                <p class="text-maisara-ember font-semibold mb-6">{{ __('Founder & CEO') }}</p>
                <p class="text-gray-600 leading-relaxed">
                    <!-- PLACEHOLDER: Founder biography -->
                    {{ __('With over 20 years of experience in technology and business leadership, Mohamed founded Maisara Solutions to address the unique digital transformation needs of the Middle East region.') }}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
