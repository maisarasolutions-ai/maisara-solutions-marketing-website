@extends('layouts.app')

@section('title', __('Portfolio Confidentiality'))

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
    :title="__('Portfolio Confidentiality')"
    :subtitle="__('Description and details for confidentiality.')"
    :badge="__('Portfolio & Track Record')"
    badgeIcon="briefcase"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Portfolio') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Confidentiality Principles -->
<x-modern.modern-section
    :title="__('Confidentiality Principles')"
    :subtitle="__('How we protect client information and maintain trust.')"
    label="{{ __('Trust') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-icon-grid :items="[
        ['icon' => 'lock', 'title' => __('Data Privacy'), 'description' => __('Strict data privacy protocols aligned with international standards.')],
        ['icon' => 'shield', 'title' => __('Non-Disclosure'), 'description' => __('Comprehensive NDAs protecting sensitive client information.')],
        ['icon' => 'eye-off', 'title' => __('Access Control'), 'description' => __('Role-based access with audit trails for all data interactions.')],
        ['icon' => 'file-text', 'title' => __('Documented Processes'), 'description' => __('Clear, documented processes for handling confidential data.')],
        ['icon' => 'users', 'title' => __('Need-to-Know Basis'), 'description' => __('Information shared only on a strict need-to-know basis.')],
        ['icon' => 'refresh-cw', 'title' => __('Regular Audits'), 'description' => __('Periodic security audits and compliance reviews.')],
    ]" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Privacy Framework -->
<x-modern.modern-section
    :title="__('Privacy Framework')"
    :subtitle="__('A comprehensive approach to protecting client confidentiality.')"
    label="{{ __('Framework') }}"
    background="default"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        ['icon' => 'shield-check', 'title' => __('Encryption at Rest'), 'description' => __('All client data encrypted using industry-standard algorithms.')],
        ['icon' => 'key', 'title' => __('Key Management'), 'description' => __('Secure key management with regular rotation policies.')],
        ['icon' => 'activity', 'title' => __('Audit Logging'), 'description' => __('Comprehensive audit trails for all data access and changes.')],
        ['icon' => 'alert-circle', 'title' => __('Breach Response'), 'description' => __('Documented incident response and notification procedures.')],
    ]" :columns="4" />
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
