@extends('layouts.app')

@section('title', __('Advisory'))

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
    :title="__('Advisory Services')"
    :subtitle="__('Strategic guidance to navigate your digital transformation journey.')"
    :badge="__('Advisory')"
    badgeIcon="lightbulb"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Start the Conversation') }}</a>
        <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Back to Services') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Process -->
<x-modern.modern-section
    :title="__('Our Advisory Process')"
    :subtitle="__('A proven methodology refined across hundreds of regional engagements.')"
    label="{{ __('How We Work') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-process :steps="[
        ['number' => '01', 'title' => __('Discovery'), 'description' => __('Deep-dive workshops to understand your current state, business objectives, and digital maturity.')],
        ['number' => '02', 'title' => __('Strategy'), 'description' => __('Craft a tailored digital transformation roadmap aligned with your vision and regional context.')],
        ['number' => '03', 'title' => __('Roadmap'), 'description' => __('Map actionable milestones, resource requirements, and quick wins to build momentum.')],
        ['number' => '04', 'title' => __('Governance'), 'description' => __('Establish executive oversight, KPIs, and change management frameworks for sustained success.')],
    ]" />

    <div class="absolute top-10 end-10 w-40 h-40 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-32 h-32 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Benefits -->
<x-modern.modern-section
    :title="__('Why Advisory with Maisara')"
    :subtitle="__('Decades of regional experience distilled into actionable, results-driven guidance.')"
    label="{{ __('Benefits') }}"
    background="ivory"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        [
            'icon' => 'compass',
            'title' => __('Regional Expertise'),
            'description' => __('Deep understanding of Middle Eastern markets, regulations, and cultural nuances.'),
        ],
        [
            'icon' => 'file-text',
            'title' => __('Proven Frameworks'),
            'description' => __('Battle-tested methodologies refined across hundreds of engagements.'),
        ],
        [
            'icon' => 'users',
            'title' => __('Executive Alignment'),
            'description' => __('Stakeholder workshops that align leadership around a shared vision.'),
        ],
        [
            'icon' => 'trending-up',
            'title' => __('Change Management'),
            'description' => __('Structured change programs that drive adoption and measurable outcomes.'),
        ],
    ]" :columns="4" />

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Start Your Transformation?')"
    :subtitle="__('Connect with our advisory team to discuss your digital transformation goals.')"
    buttonText="{{ __('Get Started') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
>
    <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Explore All Services') }}</a>
</x-modern.modern-cta>
@endsection
