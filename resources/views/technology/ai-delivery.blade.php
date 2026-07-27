@extends('layouts.app')

@section('title', __('Technology AI Delivery'))

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
    :title="__('Technology AI Delivery')"
    :subtitle="__('Description and details for AI delivery.')"
    :badge="__('Technology & Platform')"
    badgeIcon="cpu"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Technology') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Process Steps -->
<x-modern.modern-section
    :title="__('Our AI Delivery Process')"
    :subtitle="__('A structured approach to delivering AI-powered solutions.')"
    label="{{ __('Process') }}"
    background="default"
    padding="large"
>
    <x-modern.modern-process :steps="[
        ['number' => '01', 'title' => __('Prototyping'), 'description' => __('Rapid prototyping to validate concepts and align with business requirements.')],
        ['number' => '02', 'title' => __('Code Generation'), 'description' => __('AI-assisted code generation for faster, more consistent development.')],
        ['number' => '03', 'title' => __('Testing'), 'description' => __('Comprehensive testing with AI-powered quality assurance.')],
        ['number' => '04', 'title' => __('Monitoring'), 'description' => __('Continuous monitoring and optimization of AI model performance.')],
        ['number' => '05', 'title' => __('Documentation'), 'description' => __('Automated documentation and knowledge capture for sustained value.')],
    ]" />
</x-modern.modern-section>

<!-- AI Benefits -->
<x-modern.modern-section
    :title="__('AI Benefits')"
    :subtitle="__('How AI accelerates our delivery and improves outcomes.')"
    label="{{ __('Advantages') }}"
    background="mesh"
    padding="large"
>
    <x-modern.modern-feature-cards :features="[
        ['icon' => 'zap', 'title' => __('Faster Delivery'), 'description' => __('Reduce development time by up to 40% with AI-assisted workflows.')],
        ['icon' => 'check-circle', 'title' => __('Higher Quality'), 'description' => __('AI-powered testing catches issues before they reach production.')],
        ['icon' => 'trending-up', 'title' => __('Continuous Improvement'), 'description' => __('Models that learn and improve over time with usage.')],
        ['icon' => 'users', 'title' => __('Enhanced Collaboration'), 'description' => __('AI tools that bridge gaps between teams and accelerate alignment.')],
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
