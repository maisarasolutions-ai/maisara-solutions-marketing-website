@extends('layouts.app')

@section('title', __('About Us'))

@section('content')
<!-- Hero Intro -->
<section class="gradient-navy py-24 md:py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.04\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-maisara-ember/10 to-transparent pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-4xl mx-auto fade-in">
            <span class="hero-glass-badge inline-block px-5 py-2 rounded-full text-maisara-ember text-sm font-bold mb-8 uppercase tracking-wider">
                {{ __('Who We Are') }}
            </span>
            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight text-balance">
                {{ __('About Maisara Solutions') }}
            </h1>
            <p class="text-xl md:text-2xl text-white/75 mb-0 max-w-3xl mx-auto leading-relaxed">
                {{ __('A regional leader in digital transformation, combining deep Middle Eastern expertise with global best practices.') }}
            </p>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-maisara-ivory to-transparent"></div>
</section>

<!-- Company Story -->
<section class="py-24 md:py-32 bg-maisara-ivory relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- MVV Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="card fade-in group hover:border-maisara-ember/30">
                <div class="w-16 h-16 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Mission') }}</h3>
                <p class="text-gray-500 leading-relaxed">
                    {{ __('To empower organizations across the Middle East with transformative digital solutions.') }}
                </p>
            </div>
            <div class="card fade-in group hover:border-maisara-ember/30">
                <div class="w-16 h-16 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Vision') }}</h3>
                <p class="text-gray-500 leading-relaxed">
                    {{ __('To be the most trusted digital transformation partner in the region.') }}
                </p>
            </div>
            <div class="card fade-in group hover:border-maisara-ember/30">
                <div class="w-16 h-16 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Values') }}</h3>
                <p class="text-gray-500 leading-relaxed">
                    {{ __('Excellence, integrity, collaboration, and regional commitment.') }}
                </p>
            </div>
        </div>

        <!-- Founding Narrative -->
        <div class="card max-w-4xl mx-auto fade-in">
            <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-6">{{ __('Our Story') }}</h2>
            <p class="text-gray-500 text-lg leading-relaxed">
                {{ __('Founded in Cairo with a vision to bridge global technology excellence with regional business realities...') }}
            </p>
        </div>
    </div>
</section>
@endsection
