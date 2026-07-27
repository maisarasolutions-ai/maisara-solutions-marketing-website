@extends('layouts.app')

@section('title', __('Team'))

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
    :title="__('Our Team')"
    :subtitle="__('A diverse team of experts committed to delivering excellence.')"
    :badge="__('People')"
    badgeIcon="users"
>
    <a href="{{ route('talent.index', ['locale' => app()->getLocale()]) }}" class="btn-glow mt-10">{{ __('Join Our Team') }}</a>
</x-modern.modern-hero>

<!-- Team Grid -->
<x-modern.modern-section
    :subtitle="__('Meet the people behind the vision—leaders, strategists, and technologists united by a passion for regional impact.')"
    label="{{ __('The People') }}"
    background="mesh"
    padding="large"
>
    <div class="icon-grid">
        <div class="icon-card card-modern fade-up">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-ember/10 flex items-center justify-center text-maisara-ember font-bold text-sm">AM</div>
            </div>
            <h4 class="icon-card-title">{{ __('Ahmed Mansour') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('Chief Technology Officer') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('20+ years in enterprise architecture and cloud infrastructure across the GCC.') }}
            </p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 100ms;">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-navy/10 flex items-center justify-center text-maisara-navy font-bold text-sm">SR</div>
            </div>
            <h4 class="icon-card-title">{{ __('Sara Rashid') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('Head of Advisory') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('Former McKinsey consultant specializing in digital strategy for sovereign institutions.') }}
            </p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 200ms;">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-ember/10 flex items-center justify-center text-maisara-ember font-bold text-sm">OA</div>
            </div>
            <h4 class="icon-card-title">{{ __('Omar Ali') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('Delivery Director') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('Led 50+ enterprise transformations with a focus on agile delivery and change management.') }}
            </p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 300ms;">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-navy/10 flex items-center justify-center text-maisara-navy font-bold text-sm">LH</div>
            </div>
            <h4 class="icon-card-title">{{ __('Layla Hassan') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('UX Design Lead') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('Award-winning designer crafting human-centered experiences for complex enterprise systems.') }}
            </p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 400ms;">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-ember/10 flex items-center justify-center text-maisara-ember font-bold text-sm">KK</div>
            </div>
            <h4 class="icon-card-title">{{ __('Karim Khalil') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('Security Architect') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('Cybersecurity expert ensuring sovereign-grade security for all client deployments.') }}
            </p>
        </div>
        <div class="icon-card card-modern fade-up" style="transition-delay: 500ms;">
            <div class="icon-card-icon">
                <div class="w-10 h-10 rounded-full bg-maisara-navy/10 flex items-center justify-center text-maisara-navy font-bold text-sm">NA</div>
            </div>
            <h4 class="icon-card-title">{{ __('Nadia Amin') }}</h4>
            <p class="icon-card-text text-maisara-ember font-semibold mb-2">{{ __('Partnerships Manager') }}</p>
            <p class="text-gray-500 text-sm leading-relaxed">
                {{ __('Building strategic alliances with global technology leaders and regional innovators.') }}
            </p>
        </div>
    </div>

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-20 start-20 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -3s;"></div>
</x-modern.modern-section>

<!-- CTA Section -->
<x-modern.modern-cta
    :title="__('Want to Work With Us?')"
    :subtitle="__('We are always looking for talented individuals who share our passion for regional digital transformation.')"
    buttonText="{{ __('View Open Positions') }}"
    :buttonUrl="route('talent.open-positions', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Get in Touch') }}</a>
</x-modern.modern-cta>
@endsection
