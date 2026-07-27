@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
@if(session('status'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
        <div class="bg-maisara-ivory border border-maisara-ember/20 text-maisara-navy p-5 rounded-2xl shadow-sm">{{ session('status') }}</div>
    </div>
@endif

<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.04\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
    <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-maisara-ember/10 to-transparent pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="hero-glass-badge inline-block px-5 py-2 rounded-full text-maisara-ember text-sm font-bold mb-8 uppercase tracking-wider">
            {{ __('Get In Touch') }}
        </span>
        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 text-balance">{{ __('Contact Us') }}</h1>
        <p class="section-subtitle text-white/80">
            {{ __('Connect with our team across Egypt and Saudi Arabia.') }}
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-24 md:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="card fade-in">
                <h2 class="font-display text-2xl md:text-3xl font-semibold text-maisara-navy mb-8">{{ __('Send Inquiry') }}</h2>
                <form method="POST" action="{{ route('contact.submit', app()->getLocale()) }}" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-maisara-navy mb-2">{{ __('Name') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-xl border-gray-200 focus:border-maisara-ember focus:ring-maisara-ember bg-gray-50/50 transition-all duration-200" required>
                        @error('name')<p class="text-sm text-red-600 mt-1.5">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-maisara-navy mb-2">{{ __('Email') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-xl border-gray-200 focus:border-maisara-ember focus:ring-maisara-ember bg-gray-50/50 transition-all duration-200" required>
                        @error('email')<p class="text-sm text-red-600 mt-1.5">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-maisara-navy mb-2">{{ __('Company') }}</label>
                        <input type="text" name="company" value="{{ old('company') }}" class="w-full rounded-xl border-gray-200 focus:border-maisara-ember focus:ring-maisara-ember bg-gray-50/50 transition-all duration-200">
                        @error('company')<p class="text-sm text-red-600 mt-1.5">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-maisara-navy mb-2">{{ __('Message') }}</label>
                        <textarea name="message" rows="5" class="w-full rounded-xl border-gray-200 focus:border-maisara-ember focus:ring-maisara-ember bg-gray-50/50 transition-all duration-200 resize-none">{{ old('message') }}</textarea>
                        @error('message')<p class="text-sm text-red-600 mt-1.5">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn-primary w-full sm:w-auto">{{ __('Send Inquiry') }}</button>
                </form>
            </div>

            <!-- Regional Routing -->
            <div class="space-y-6">
                <div class="card fade-in group hover:border-maisara-ember/30">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Egypt') }}</h3>
                            <p class="text-gray-500 text-sm mb-1">{{ __('Cairo') }}</p>
                            <a href="mailto:egypt@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-semibold transition-colors duration-200 text-sm">egypt@maisara-solutions.com</a>
                        </div>
                    </div>
                </div>
                <div class="card fade-in group hover:border-maisara-ember/30">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Saudi Arabia') }}</h3>
                            <p class="text-gray-500 text-sm mb-1">{{ __('Riyadh') }}</p>
                            <a href="mailto:saudi@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-semibold transition-colors duration-200 text-sm">saudi@maisara-solutions.com</a>
                        </div>
                    </div>
                </div>
                <div class="bg-maisara-ivory rounded-2xl p-8 fade-in">
                    <h2 class="font-display text-xl font-bold text-maisara-navy mb-4">{{ __('How Can We Help?') }}</h2>
                    @include('components.shared.segment-selector')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
