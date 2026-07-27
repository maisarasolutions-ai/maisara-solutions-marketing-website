@extends('layouts.app')

@section('title', __('Portfolio Client Narratives'))

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
    :title="__('Portfolio Client Narratives')"
    :subtitle="__('Description and details for client narratives.')"
    :badge="__('Portfolio & Track Record')"
    badgeIcon="briefcase"
>
    <div class="flex flex-wrap gap-4 mt-10 fade-up">
        <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Back to Portfolio') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Testimonials -->
<x-modern.modern-section
    :title="__('Client Narratives')"
    :subtitle="__('Hear directly from the leaders we have partnered with.')"
    label="{{ __('Testimonials') }}"
    background="mesh"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="card-modern fade-up" style="transition-delay: 0ms;">
            <div class="flex items-center gap-1 mb-4">
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"{{ __('Maisara transformed our digital capabilities with a solution that respects our sovereignty and cultural context.') }}"</p>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-maisara-navy/10 rounded-full flex items-center justify-center">
                    <i data-lucide="user" class="w-5 h-5 text-maisara-navy"></i>
                </div>
                <div>
                    <p class="font-semibold text-maisara-navy text-sm">{{ __('Regional Leader') }}</p>
                    <p class="text-gray-500 text-xs">{{ __('Government Sector') }}</p>
                </div>
            </div>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 100ms;">
            <div class="flex items-center gap-1 mb-4">
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"{{ __('The AI-delivery approach accelerated our time-to-market while maintaining the quality our customers expect.') }}"</p>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-maisara-navy/10 rounded-full flex items-center justify-center">
                    <i data-lucide="user" class="w-5 h-5 text-maisara-navy"></i>
                </div>
                <div>
                    <p class="font-semibold text-maisara-navy text-sm">{{ __('Emerging Venture') }}</p>
                    <p class="text-gray-500 text-xs">{{ __('Technology Startup') }}</p>
                </div>
            </div>
        </div>
        <div class="card-modern fade-up" style="transition-delay: 200ms;">
            <div class="flex items-center gap-1 mb-4">
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
                <i data-lucide="star" class="w-5 h-5 text-maisara-ember fill-maisara-ember"></i>
            </div>
            <p class="text-gray-600 italic mb-6 leading-relaxed">"{{ __('Operational excellence through partnership. Maisara understands the nuances of our market.') }}"</p>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-maisara-navy/10 rounded-full flex items-center justify-center">
                    <i data-lucide="user" class="w-5 h-5 text-maisara-navy"></i>
                </div>
                <div>
                    <p class="font-semibold text-maisara-navy text-sm">{{ __('Established Service') }}</p>
                    <p class="text-gray-500 text-xs">{{ __('Financial Services') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute top-10 end-10 w-32 h-32 bg-maisara-ember/5 rounded-full blur-2xl float-shape pointer-events-none"></div>
    <div class="absolute bottom-10 start-10 w-24 h-24 bg-maisara-navy-light/5 rounded-full blur-2xl float-shape pointer-events-none" style="animation-delay: -2s;"></div>
</x-modern.modern-section>

<!-- Narrative Themes -->
<x-modern.modern-section
    :title="__('Narrative Themes')"
    :subtitle="__('Recurring themes that emerge from our client partnerships.')"
    label="{{ __('Themes') }}"
    background="default"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="card-modern fade-up text-center" style="transition-delay: 0ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="shield" class="w-6 h-6"></i>
            </div>
            <h4 class="font-display text-base font-semibold text-maisara-navy mb-2">{{ __('Trust') }}</h4>
            <p class="text-gray-600 text-sm">{{ __('Built on transparency and consistent delivery.') }}</p>
        </div>
        <div class="card-modern fade-up text-center" style="transition-delay: 100ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="target" class="w-6 h-6"></i>
            </div>
            <h4 class="font-display text-base font-semibold text-maisara-navy mb-2">{{ __('Results') }}</h4>
            <p class="text-gray-600 text-sm">{{ __('Measurable outcomes that drive business value.') }}</p>
        </div>
        <div class="card-modern fade-up text-center" style="transition-delay: 200ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="users" class="w-6 h-6"></i>
            </div>
            <h4 class="font-display text-base font-semibold text-maisara-navy mb-2">{{ __('Partnership') }}</h4>
            <p class="text-gray-600 text-sm">{{ __('Long-term relationships built on mutual success.') }}</p>
        </div>
        <div class="card-modern fade-up text-center" style="transition-delay: 300ms;">
            <div class="icon-card-icon mx-auto mb-4">
                <i data-lucide="lightbulb" class="w-6 h-6"></i>
            </div>
            <h4 class="font-display text-base font-semibold text-maisara-navy mb-2">{{ __('Innovation') }}</h4>
            <p class="text-gray-600 text-sm">{{ __('Forward-thinking solutions for future challenges.') }}</p>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Learn More?')"
    :subtitle="__('Contact us to discuss how we can help with your needs.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
