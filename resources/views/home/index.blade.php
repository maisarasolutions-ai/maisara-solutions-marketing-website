@extends('layouts.app')

@section('title', __('Home'))

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        ['fade-in', 'fade-up'].forEach(function(className) {
            var elements = document.querySelectorAll('.' + className);
            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
                elements.forEach(function(el) { observer.observe(el); });
            } else {
                elements.forEach(function(el) { el.classList.add('visible'); });
            }
        });
    });
</script>
@endpush

@section('content')
@if($content)
    {!! $content !!}
@else

    {{-- Hero Section --}}
    <x-modern.modern-hero
        :title="__('Empowering Digital Transformation in the Middle East')"
        :subtitle="__('Maisara Solutions delivers advisory, design, and delivery services with deep regional expertise.')"
        :badge="__('Digital Transformation Partner')"
        badgeIcon="sparkles"
    >
        <div class="flex flex-wrap gap-4 mt-10 fade-up">
            <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Start Your Journey') }}</a>
            <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore Services') }}</a>
        </div>
    </x-modern.modern-hero>

    {{-- Trust Indicators / Stats --}}
    <section class="section-spacing bg-maisara-ivory relative overflow-hidden">
        <div class="absolute top-10 end-10 w-64 h-64 bg-maisara-ember/5 rounded-full blur-3xl float-shape"></div>
        <div class="absolute bottom-10 start-10 w-48 h-48 bg-maisara-navy-light/5 rounded-full blur-3xl float-shape" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 start-1/2 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape" style="animation-delay: -4s;"></div>
        <div class="container-modern relative z-10">
            <div class="text-center mb-12 fade-up">
                <span class="section-label">{{ __('Trust Indicators') }}</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy">{{ __('Proven Track Record') }}</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed mt-4">
                    {{ __('Delivering excellence across the Middle East and beyond.') }}
                </p>
            </div>
            <x-modern.modern-stats :stats="[
                ['number' => '15+', 'label' => __('Years of Regional Expertise'), 'description' => __('Trusted across the Middle East')],
                ['number' => '200+', 'label' => __('Projects Delivered'), 'description' => __('Across diverse industries')],
                ['number' => '98%', 'label' => __('Client Satisfaction'), 'description' => __('Driving measurable impact')],
            ]" />
        </div>
    </section>

    {{-- Segment Paths --}}
    <x-modern.modern-section
        :title="__('Choose Your Path')"
        :subtitle="__('Select your segment to discover tailored digital transformation solutions designed for your unique needs.')"
        label="{{ __('Tailored For You') }}"
        background="default"
        padding="large"
    >
        <div class="icon-grid">
            <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'sovereign']) }}" class="icon-card card-modern fade-up">
                <div class="icon-card-icon">
                    <i data-lucide="landmark" class="w-6 h-6"></i>
                </div>
                <h4 class="icon-card-title">{{ __('Sovereign Professional') }}</h4>
                <p class="icon-card-text">{{ __('Enterprise-grade advisory') }}</p>
            </a>
            <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'emerging']) }}" class="icon-card card-modern fade-up" style="transition-delay: 100ms;">
                <div class="icon-card-icon">
                    <i data-lucide="trending-up" class="w-6 h-6"></i>
                </div>
                <h4 class="icon-card-title">{{ __('Emerging Venture') }}</h4>
                <p class="icon-card-text">{{ __('Growth-focused solutions') }}</p>
            </a>
            <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'established']) }}" class="icon-card card-modern fade-up" style="transition-delay: 200ms;">
                <div class="icon-card-icon">
                    <i data-lucide="building-2" class="w-6 h-6"></i>
                </div>
                <h4 class="icon-card-title">{{ __('Established Service') }}</h4>
                <p class="icon-card-text">{{ __('Streamlined operations') }}</p>
            </a>
        </div>
    </x-modern.modern-section>

    {{-- Deployment Models --}}
    <section class="section-spacing gradient-navy relative overflow-hidden">
        <div class="absolute inset-0 bg-dot-pattern-navy opacity-40 pointer-events-none"></div>
        <div class="absolute top-10 end-10 w-48 h-48 bg-maisara-navy-light/20 rounded-full blur-3xl float-shape"></div>
        <div class="absolute bottom-10 start-10 w-32 h-32 bg-maisara-ember/8 rounded-full blur-2xl float-shape" style="animation-delay: -2s;"></div>
        <div class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-maisara-ember/5 rounded-full blur-3xl float-shape" style="animation-delay: -4s;"></div>
        <div class="container-modern relative z-10 text-center">
            <div class="max-w-4xl mx-auto fade-up">
                <span class="section-label">{{ __('Flexibility') }}</span>
                <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">{{ __('Flexible Deployment Models') }}</h2>
                <p class="text-lg md:text-xl text-white/75 mb-10 max-w-3xl mx-auto leading-relaxed">
                    {{ __('From advisory sprints to full managed operations, we adapt to your needs.') }}
                </p>
                <a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Learn More') }}</a>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <x-modern.modern-cta
        :title="__('Ready to Transform?')"
        :subtitle="__('Connect with our team to discuss your digital transformation goals.')"
        buttonText="{{ __('Get Started') }}"
        :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
    >
        <a href="{{ route('assessment.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Take Assessment') }}</a>
    </x-modern.modern-cta>

@endif
@endsection
