@extends('layouts.app')

@section('title', __('Contact'))

@section('content')
@if(session('status'))
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
        <div class="bg-maisara-ivory border border-maisara-ember/20 text-maisara-navy p-5 rounded-2xl shadow-sm">{{ session('status') }}</div>
    </div>
@endif

<!-- Hero -->
<x-modern.modern-hero
    :title="__('Contact Us')"
    :subtitle="__('Connect with our team across Egypt and Saudi Arabia. Let us discuss your digital transformation goals.')"
    :badge="__('Get In Touch')"
    badgeIcon="mail"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="mailto:egypt@maisara-solutions.com" class="btn-glow">{{ __('Email Egypt Team') }}</a>
        <a href="mailto:saudi@maisara-solutions.com" class="btn-outline">{{ __('Email Saudi Team') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Contact Content -->
<x-modern.modern-section background="default" :padding="'large'">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="card-modern fade-up">
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
                <button type="submit" class="btn-glow">{{ __('Send Inquiry') }}</button>
            </form>
        </div>

        <!-- Regional Info -->
        <div class="space-y-6">
            <div class="card-modern fade-up group">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                        <i data-lucide="map-pin" class="w-6 h-6 text-maisara-ember"></i>
                    </div>
                    <div>
                        <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Egypt') }}</h3>
                        <p class="text-gray-500 text-sm mb-1">{{ __('Cairo') }}</p>
                        <a href="mailto:egypt@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-semibold transition-colors duration-200 text-sm">egypt@maisara-solutions.com</a>
                    </div>
                </div>
            </div>
            <div class="card-modern fade-up group" style="transition-delay: 100ms;">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                        <i data-lucide="map-pin" class="w-6 h-6 text-maisara-ember"></i>
                    </div>
                    <div>
                        <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Saudi Arabia') }}</h3>
                        <p class="text-gray-500 text-sm mb-1">{{ __('Riyadh') }}</p>
                        <a href="mailto:saudi@maisara-solutions.com" class="text-maisara-ember hover:text-maisara-ember-dark font-semibold transition-colors duration-200 text-sm">saudi@maisara-solutions.com</a>
                    </div>
                </div>
            </div>
            <div class="bg-maisara-ivory rounded-2xl p-8 fade-up" style="transition-delay: 200ms;">
                <h2 class="font-display text-xl font-bold text-maisara-navy mb-4">{{ __('How Can We Help?') }}</h2>
                @include('components.shared.segment-selector')
            </div>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Let Us Build Something Great')"
    :subtitle="__('Schedule a free consultation to discuss your project requirements and objectives.')"
    buttonText="{{ __('Book a Session') }}"
    :buttonUrl="route('contact.booking', ['locale' => app()->getLocale()])"
/>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush
@endsection
