@extends('layouts.app')

@section('title', __('Methodology'))

@section('content')
<!-- Hero -->
<section class="relative gradient-navy py-24 md:py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="section-title text-white mb-6">{{ __('Methodology') }}</h1>
        <p class="section-subtitle text-white/80 text-balance">
            {{ __('Our proven approach to digital transformation.') }}
        </p>
        <div class="mt-10">
            @include('components.shared.segment-selector')
        </div>
    </div>
</section>

<!-- Process -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Our Process') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('A repeatable, transparent framework from discovery to ongoing support.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card text-center">
                <div class="w-14 h-14 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Discovery') }}</h3>
                <p class="text-gray-600">{{ __('Understanding your needs and goals.') }}</p>
            </div>
            <div class="card text-center">
                <div class="w-14 h-14 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-design') }}</h3>
                <p class="text-gray-600">{{ __('Collaborative solution design.') }}</p>
            </div>
            <div class="card text-center">
                <div class="w-14 h-14 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Delivery') }}</h3>
                <p class="text-gray-600">{{ __('Implementation with transparency.') }}</p>
            </div>
            <div class="card text-center">
                <div class="w-14 h-14 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">4</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Support') }}</h3>
                <p class="text-gray-600">{{ __('Ongoing enablement and optimization.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="py-24 md:py-32 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-center text-maisara-navy mb-4">{{ __('Project Timeline') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto text-center mb-12 text-balance">
            {{ __('Typical milestones from kickoff to launch.') }}
        </p>
        <div class="max-w-4xl mx-auto">
            <div class="relative hidden md:block">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-maisara-ember/30"></div>
                <div class="space-y-8">
                    <div class="flex items-center">
                        <div class="w-1/2 text-right pr-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 1-2') }}</h4>
                            <p class="text-gray-600">{{ __('Discovery & Scoping') }}</p>
                        </div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10 shrink-0"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10 shrink-0"></div>
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
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10 shrink-0"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10 shrink-0"></div>
                        <div class="w-1/2 text-left pl-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 13+') }}</h4>
                            <p class="text-gray-600">{{ __('Launch & Knowledge Transfer') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:hidden space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-4 h-4 bg-maisara-ember rounded-full mt-1.5 shrink-0"></div>
                    <div>
                        <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 1-2') }}</h4>
                        <p class="text-gray-600">{{ __('Discovery & Scoping') }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-4 h-4 bg-maisara-ember rounded-full mt-1.5 shrink-0"></div>
                    <div>
                        <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 3-6') }}</h4>
                        <p class="text-gray-600">{{ __('Co-design & Governance') }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-4 h-4 bg-maisara-ember rounded-full mt-1.5 shrink-0"></div>
                    <div>
                        <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 7-12') }}</h4>
                        <p class="text-gray-600">{{ __('Development & QA') }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-4 h-4 bg-maisara-ember rounded-full mt-1.5 shrink-0"></div>
                    <div>
                        <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 13+') }}</h4>
                        <p class="text-gray-600">{{ __('Launch & Knowledge Transfer') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="gradient-navy py-24 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl md:text-4xl font-bold text-white mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto text-balance">
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ route('contact.booking', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Book a Consultation') }}</a>
    </div>
</section>
@endsection
