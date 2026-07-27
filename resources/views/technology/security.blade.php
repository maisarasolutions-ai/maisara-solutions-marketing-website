@extends('layouts.app')

@section('title', __('Technology Security'))

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
    :title="__('Technology Security')"
    :subtitle="__('Description and details for security.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Technology') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Security Features -->
<x-modern.modern-section
    :title="__('Security Features')"
    :subtitle="__('Comprehensive security measures to protect your data and infrastructure.')"
    label="{{ __('Protection') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-icon-grid :items="[
        ['icon' => 'shield-check', 'title' => __('SSL Encryption'), 'description' => __('End-to-end encryption for all data in transit and at rest.')],
        ['icon' => 'refresh-cw', 'title' => __('Patch Management'), 'description' => __('Automated security patches and updates across all systems.')],
        ['icon' => 'key', 'title' => __('Access Control'), 'description' => __('Role-based access control with multi-factor authentication.')],
        ['icon' => 'activity', 'title' => __('Monitoring'), 'description' => __('24/7 security monitoring and threat detection.')],
        ['icon' => 'hard-drive', 'title' => __('Backup & Recovery'), 'description' => __('Automated backups with rapid recovery capabilities.')],
        ['icon' => 'alert-circle', 'title' => __('Incident Response'), 'description' => __('Rapid incident response and remediation procedures.')],
    ]" />

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
