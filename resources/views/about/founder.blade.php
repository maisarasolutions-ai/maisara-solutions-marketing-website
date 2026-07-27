@extends('layouts.app')

@section('title', __('Founder'))

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
    :title="__('Our Founder')"
    :subtitle="__('The vision behind Maisara Solutions and the leadership driving our regional digital transformation mission.')"
    :badge="__('Leadership')"
    badgeIcon="award"
>
    <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="btn-outline mt-10">{{ __('Back to About') }}</a>
</x-modern.modern-hero>

<!-- Founder Split Section -->
<x-modern.modern-section
    label="{{ __('The Person') }}"
    background="default"
    padding="large"
>
    <div class="split-section">
        <div class="split-visual fade-up">
            <div class="relative">
                <div class="w-64 h-64 md:w-80 md:h-80 rounded-full bg-gradient-to-br from-maisara-navy/10 to-maisara-ember/10 flex items-center justify-center mx-auto lg:mx-0 border-2 border-maisara-ember/20">
                    <span class="font-display text-6xl md:text-7xl font-bold text-maisara-ember">M</span>
                </div>
                <div class="absolute -bottom-4 -end-4 w-24 h-24 bg-maisara-ember/10 rounded-full blur-xl float-shape pointer-events-none"></div>
            </div>
        </div>
        <div class="fade-up">
            <div class="split-content">
                <span class="badge-ember badge-modern mb-4">{{ __('Founder & CEO') }}</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy mb-6">Mohamed Maisara</h2>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    {{ __('With over 20 years of experience in technology and business leadership, Mohamed founded Maisara Solutions to address the unique digital transformation needs of the Middle East region.') }}
                </p>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('His vision combines global best practices with deep regional understanding, ensuring every solution is both world-class and locally relevant.') }}
                </p>
            </div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Philosophy Cards -->
<x-modern.modern-section
    :title="__('Key Philosophies')"
    :subtitle="__('The guiding principles that shape our approach to every engagement.')"
    label="{{ __('Philosophy') }}"
    background="mesh"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="card-modern fade-up">
            <div class="icon-card-icon mb-4">
                <i data-lucide="target" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Regional First') }}</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                {{ __('Every solution is designed with the Middle East\'s unique business landscape, regulations, and culture at its core.') }}
            </p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('People Centered') }}</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                {{ __('Technology serves people. We design solutions that empower teams and delight users.') }}
            </p>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="rocket" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Sustainable Growth') }}</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                {{ __('We build capabilities, not just systems, ensuring lasting impact long after deployment.') }}
            </p>
        </div>
    </div>

    <div class="absolute top-10 start-10 w-40 h-40 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
</x-modern.modern-section>

<!-- Quote Card -->
<x-modern.modern-section background="ivory" padding="large">
    <div class="max-w-3xl mx-auto fade-up">
        <div class="card-ember p-8 md:p-12 text-center relative">
            <i data-lucide="quote" class="w-12 h-12 text-maisara-ember/20 absolute top-6 start-6"></i>
            <blockquote class="font-display text-2xl md:text-3xl text-maisara-navy italic leading-relaxed mb-6">
                {{ __('"Digital transformation is not just about technology—it\'s about people, culture, and the courage to reimagine what\'s possible."') }}
            </blockquote>
            <cite class="text-maisara-ember font-semibold not-italic">— Mohamed Maisara</cite>
        </div>
    </div>
</x-modern.modern-section>
@endsection
