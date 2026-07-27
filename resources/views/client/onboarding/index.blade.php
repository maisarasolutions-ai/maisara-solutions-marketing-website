@extends('layouts.app')

@section('title', __('Client Onboarding Index'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{ __('Client Onboarding Index') }</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/client/onboarding/index/index.md -->
                { __('Onboarding overview and introduction.') }
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Key features / content sections -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- PLACEHOLDER: Feature cards from content/client/onboarding/index/index.md -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{ __('Feature') } 1</h3>
                <p class="text-gray-600">{ __('Description of key feature and capability.') }</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{ __('Feature') } 2</h3>
                <p class="text-gray-600">{ __('Description of key feature and capability.') }</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{ __('Feature') } 3</h3>
                <p class="text-gray-600">{ __('Description of key feature and capability.') }</p>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: CTA section -->
<section class="py-20 bg-maisara-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl font-bold mb-6">{ __('Ready to Learn More?') }</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            <!-- PLACEHOLDER: CTA description -->
            { __('Contact us to discuss how we can help with onboarding.') }
        </p>
        <a href="{ route('contact.index', ['locale' => app()->getLocale()]) }" class="btn-primary">{ __('Contact Us') }</a>
    </div>
</section>
@endsection
