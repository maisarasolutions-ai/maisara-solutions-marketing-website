@extends('layouts.app')

@section('title', __('Methodology'))

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('Methodology')"
    :subtitle="__('Our proven approach to digital transformation, from discovery to ongoing support.')"
    :badge="__('Our Process')"
    badgeIcon="workflow"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('methodology.discovery', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Explore Process') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Process Steps -->
<x-modern.modern-section background="default" :padding="'large'">
    <div class="text-center mb-12 fade-up">
        <span class="section-label">{{ __('How We Work') }}</span>
        <h2 class="font-display text-3xl md:text-4xl font-bold text-maisara-navy">{{ __('Our Process') }}</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mt-4 leading-relaxed">
            {{ __('A repeatable, transparent framework from discovery to ongoing support.') }}
        </p>
    </div>

    <x-modern.modern-process :steps="[
        ['number' => '01', 'title' => __('Discovery'), 'description' => __('Understanding your needs, goals, and operational context through structured analysis.')],
        ['number' => '02', 'title' => __('Co-design'), 'description' => __('Collaborative solution design with stakeholders aligned on outcomes.')],
        ['number' => '03', 'title' => __('Delivery'), 'description' => __('Implementation with full transparency and quality assurance.')],
        ['number' => '04', 'title' => __('Support'), 'description' => __('Ongoing enablement, optimization, and strategic guidance.')],
    ]" />
</x-modern.modern-section>

<!-- Timeline -->
<x-modern.modern-section background="ivory" :label="__('Project Timeline')">
    <x-modern.modern-timeline :items="[
        ['date' => __('Weeks 1-2'), 'title' => __('Discovery & Scoping'), 'description' => __('Understanding your needs, goals, and operational context through structured analysis.')],
        ['date' => __('Weeks 3-6'), 'title' => __('Co-design & Governance'), 'description' => __('Collaborative design sessions with aligned stakeholders and approved governance.')],
        ['date' => __('Weeks 7-12'), 'title' => __('Development & QA'), 'description' => __('Implementation with full transparency, quality gates, and client check-ins.')],
        ['date' => __('Weeks 13+'), 'title' => __('Launch & Knowledge Transfer'), 'description' => __('Production deployment, admin training, and ongoing advisory support.')],
    ]" />
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Start?')"
    :subtitle="__('Book a consultation to discuss your project requirements and objectives.')"
    buttonText="{{ __('Book a Consultation') }}"
    :buttonUrl="route('contact.booking', ['locale' => app()->getLocale()])"
/>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush
@endsection
