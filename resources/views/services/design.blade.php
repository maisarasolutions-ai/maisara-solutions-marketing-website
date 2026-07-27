@extends('layouts.app')

@section('title', __('Design'))

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
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Design Services')"
    :subtitle="__('User-centered design solutions crafted for regional audiences.')"
    :badge="__('Design')"
    badgeIcon="palette"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Start Your Project') }}</a>
        <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Back to Services') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Design Capabilities -->
<x-modern.modern-section
    :title="__('Design Capabilities')"
    :subtitle="__('End-to-end design services that transform complex requirements into intuitive experiences.')"
    label="{{ __('Capabilities') }}"
    background="mesh"
    padding="large"
>
    <div class="icon-grid">
        <div class="icon-card card-modern fade-up">
            <div class="icon-card-icon">
                <i data-lucide="pen-tool" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('UX Strategy') }}</h4>
            <p class="icon-card-text">{{ __('Research-driven experience architecture') }}</p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon">
                <i data-lucide="paintbrush" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Visual Design') }}</h4>
            <p class="icon-card-text">{{ __('Brand-aligned interfaces and design systems') }}</p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon">
                <i data-lucide="git-branch" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Service Design') }}</h4>
            <p class="icon-card-text">{{ __('End-to-end user journey mapping') }}</p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon">
                <i data-lucide="layout-template" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Design Systems') }}</h4>
            <p class="icon-card-text">{{ __('Scalable component libraries and tokens') }}</p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 400ms;">
            <div class="icon-card-icon">
                <i data-lucide="smartphone" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Prototyping') }}</h4>
            <p class="icon-card-text">{{ __('High-fidelity interactive prototypes') }}</p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 500ms;">
            <div class="icon-card-icon">
                <i data-lucide="eye" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">{{ __('Accessibility') }}</h4>
            <p class="icon-card-text">{{ __('Inclusive design for all users') }}</p>
        </div>
    </div>

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Split Section -->
<x-modern.modern-section
    background="ivory"
    padding="large"
>
    <div class="split-section">
        <div class="split-visual fade-up">
            <div class="relative">
                <div class="card-ember p-8 md:p-12 relative">
                    <i data-lucide="quote" class="w-12 h-12 text-maisara-ember/20 absolute top-6 start-6"></i>
                    <blockquote class="font-display text-2xl md:text-3xl text-maisara-navy italic leading-relaxed mb-6">
                        {{ __('"Design is not just what it looks like. Design is how it works in the hands of the people who use it every day."') }}
                    </blockquote>
                    <cite class="text-maisara-ember font-semibold not-italic">{{ __('— Maisara Design Philosophy') }}</cite>
                </div>
                <div class="absolute -bottom-4 -end-4 w-24 h-24 bg-maisara-ember/10 rounded-full blur-xl float-shape pointer-events-none"></div>
            </div>
        </div>
        <div class="fade-up">
            <div class="split-content">
                <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-6">{{ __('Our Design Philosophy') }}</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ __('User-centered design solutions crafted for regional audiences.') }}
                </p>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('We believe great design transcends aesthetics. It is about empathy, context, and outcomes. Every interface we create is tested against the real needs of Middle Eastern users, ensuring cultural resonance and business impact.') }}
                </p>
            </div>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Design Something Great?')"
    :subtitle="__('Let us craft exceptional experiences tailored to your users.')"
    buttonText="{{ __('Start a Project') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore All Services') }}</a>
</x-modern.modern-cta>
@endsection
