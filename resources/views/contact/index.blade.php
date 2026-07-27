@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
@if(session('status'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
        <div class="bg-green-50 border border-green-200 text-green-800 p-4 rounded-xl">{{ session('status') }}</div>
    </div>
@endif

<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Contact Us') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Connect with our team across Egypt and Saudi Arabia.') }}
        </p>
    </div>
</section>

<!-- Content -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="card">
                <h2 class="font-display text-2xl font-semibold text-maisara-navy mb-6">{{ __('Send Inquiry') }}</h2>
                <form method="POST" action="{{ route('contact.submit', app()->getLocale()) }}" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Name') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-xl border-gray-300 focus:border-maisara-ember focus:ring-maisara-ember" required>
                        @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-xl border-gray-300 focus:border-maisara-ember focus:ring-maisara-ember" required>
                        @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Company') }}</label>
                        <input type="text" name="company" value="{{ old('company') }}" class="w-full rounded-xl border-gray-300 focus:border-maisara-ember focus:ring-maisara-ember">
                        @error('company')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Message') }}</label>
                        <textarea name="message" rows="5" class="w-full rounded-xl border-gray-300 focus:border-maisara-ember focus:ring-maisara-ember">{{ old('message') }}</textarea>
                        @error('message')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn-primary">{{ __('Send Inquiry') }}</button>
                </form>
            </div>

            <!-- Regional Routing -->
            <div class="space-y-6">
                <div class="card">
                    <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-2">{{ __('Egypt') }}</h3>
                    <p class="text-gray-600 mb-2">{{ __('Cairo') }}</p>
                    <a href="mailto:egypt@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-medium">egypt@maisara-solutions.com</a>
                </div>
                <div class="card">
                    <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-2">{{ __('Saudi Arabia') }}</h3>
                    <p class="text-gray-600 mb-2">{{ __('Riyadh') }}</p>
                    <a href="mailto:saudi@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-medium">saudi@maisara-solutions.com</a>
                </div>
                <div class="bg-maisara-ivory rounded-2xl p-8">
                    <h2 class="font-display text-2xl font-bold text-maisara-navy mb-4">{{ __('How Can We Help?') }}</h2>
                    @include('components.shared.segment-selector')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
