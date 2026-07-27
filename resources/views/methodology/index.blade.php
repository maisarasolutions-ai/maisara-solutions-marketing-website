@extends('layouts.app')

@section('title', __('Methodology'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('Methodology') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: Methodology -->
                {{ __('Our proven approach to digital transformation.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Process Overview -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Our Process') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- PLACEHOLDER: content/methodology/index.md process steps -->
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Discovery') }}</h3>
                <p class="text-gray-600">{{ __('Understanding your needs and goals.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-design') }}</h3>
                <p class="text-gray-600">{{ __('Collaborative solution design.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Delivery') }}</h3>
                <p class="text-gray-600">{{ __('Implementation with transparency.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">4</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Support') }}</h3>
                <p class="text-gray-600">{{ __('Ongoing enablement and optimization.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: Timeline -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Project Timeline') }}</h2>
        <div class="max-w-4xl mx-auto">
            <!-- PLACEHOLDER: content/methodology/index.md timeline -->
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-maisara-ember"></div>
                <div class="space-y-8">
                    <div class="flex items-center">
                        <div class="w-1/2 text-right pr-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 1-2') }}</h4>
                            <p class="text-gray-600">{{ __('Discovery & Scoping') }}</p>
                        </div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2 text-left pl-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 3-6') }}</h4>
                            <p class="text-gray-600">{{ __('Co-design & Governance') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 text-right pr-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 7-12') }}</h4>
                            <p class="text-gray-600">{{ __('Development & QA') }}</p>
                        </div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2 text-left pl-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 13+') }}</h4>
                            <p class="text-gray-600">{{ __('Launch & Knowledge Transfer') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: CTA section -->
<section class="py-20 bg-maisara-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl font-bold mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            <!-- PLACEHOLDER: CTA description -->
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('contact.booking', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Book a Consultation') }}</a>
    </div>
</section>
@endsection
