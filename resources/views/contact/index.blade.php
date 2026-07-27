@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
@if(session('status'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-green-50 border border-green-200 text-green-800 p-4 rounded-lg">{{ session('status') }}</div>
    </div>
@endif
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Contact Us') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ __('Connect with our team across Egypt and Saudi Arabia.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <form method="POST" action="{{ route('contact.submit', app()->getLocale()) }}" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Name') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-lg border-gray-300" required>
                        @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Email') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-gray-300" required>
                        @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Company') }}</label>
                        <input type="text" name="company" value="{{ old('company') }}" class="w-full rounded-lg border-gray-300">
                        @error('company')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">{{ __('Message') }}</label>
                        <textarea name="message" rows="4" class="w-full rounded-lg border-gray-300">{{ old('message') }}</textarea>
                        @error('message')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="btn-primary">{{ __('Send Inquiry') }}</button>
                </form>
            </div>

            <!-- Regional Routing -->
            <div class="space-y-6">
                <div class="bg-maisara-ivory p-8 rounded-xl">
                    <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Egypt') }}</h3>
                    <p class="text-gray-600 mb-2">{{ __('Cairo') }}</p>
                    <a href="mailto:egypt@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark">egypt@maisara-solutions.com</a>
                </div>
                <div class="bg-maisara-ivory p-8 rounded-xl">
                    <h3 class="font-display text-2xl font-semibold text-maisara-navy mb-4">{{ __('Saudi Arabia') }}</h3>
                    <p class="text-gray-600 mb-2">{{ __('Riyadh') }}</p>
                    <a href="mailto:saudi@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark">saudi@maisara-solutions.com</a>
                </div>
                <div class="text-center">
                    <h2 class="font-display text-2xl font-bold text-maisara-navy mb-6">{{ __('How Can We Help?') }}</h2>
                    @include('components.shared.segment-selector')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
