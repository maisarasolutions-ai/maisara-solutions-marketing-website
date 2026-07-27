@extends('layouts.app')

@section('title', __('Portfolio Case Studies'))

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
    :title="__('Portfolio Case Studies')"
    :subtitle="__('Description and details for case studies.')"
    :badge="__('Portfolio & Track Record')"
    badgeIcon="briefcase"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Portfolio') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Case Study Categories -->
<x-modern.modern-section
    :title="__('Case Study Categories')"
    :subtitle="__('Our work spans three distinct client segments.')"
    label="{{ __('Our Work') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-icon-grid :items="[
        ['icon' => 'building-2', 'title' => __('Sovereign Professional'), 'description' => __('Enterprise-grade digital transformation for government and large institutions.')],
        ['icon' => 'trending-up', 'title' => __('Emerging Venture'), 'description' => __('Growth-focused solutions for startups and scale-ups.')],
        ['icon' => 'settings', 'title' => __('Established Service'), 'description' => __('Streamlined operations and digital optimization for mature businesses.')],
    ]" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Case Study Features -->
<x-modern.modern-section
    :title="__('What Makes Our Case Studies Different')"
    :subtitle="__('Every case study is built on real outcomes and measurable impact.')"
    label="{{ __('Evidence') }}"
    background="default"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        ['icon' => 'file-text', 'title' => __('Detailed Documentation'), 'description' => __('Comprehensive documentation of challenges, solutions, and outcomes.')],
        ['icon' => 'bar-chart-3', 'title' => __('Measurable Outcomes'), 'description' => __('Quantifiable results tied to business KPIs and objectives.')],
        ['icon' => 'shield-check', 'title' => __('Verified Results'), 'description' => __('Third-party verification and client validation of reported outcomes.')],
        ['icon' => 'refresh-cw', 'title' => __('Updated Regularly'), 'description' => __('Case studies refreshed as clients achieve new milestones.')],
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
