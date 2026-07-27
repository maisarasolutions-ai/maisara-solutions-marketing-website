@extends('layouts.app')

@section('title', __('Technology Architecture Philosophy'))

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
    :title="__('Technology Architecture Philosophy')"
    :subtitle="__('Description and details for architecture philosophy.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Technology') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Architecture Principles -->
<x-modern.modern-section
    :title="__('Architecture Principles')"
    :subtitle="__('The four core principles that guide every decision we make.')"
    label="{{ __('Our Foundation') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'shield',
            'title' => __('Sovereignty'),
            'description' => __('Built on open standards and vendor-neutral protocols to avoid lock-in.'),
        ],
        [
            'icon' => 'lock',
            'title' => __('Isolation'),
            'description' => __('Every layer designed with sovereignty, encryption, and isolation in mind.'),
        ],
        [
            'icon' => 'languages',
            'title' => __('Bilingual'),
            'description' => __('Native RTL support and Arabic NLP as core capabilities.'),
        ],
        [
            'icon' => 'brain',
            'title' => __('AI-Accelerated'),
            'description' => __('Architectures that grow with your business, not against it.'),
        ],
    ]" :columns="4" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
