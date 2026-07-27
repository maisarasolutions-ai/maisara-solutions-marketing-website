@props([
    'title' => '',
    'subtitle' => '',
    'buttonText' => 'Get Started',
    'buttonUrl' => '#',
    'variant' => 'primary',
])

@php
$bgVariant = $variant === 'secondary' ? 'gradient-navy' : 'bg-mesh-navy';
@endphp

<section class="{{ $bgVariant }} relative overflow-hidden section-spacing">
    <div class="absolute inset-0 bg-dot-pattern-navy opacity-30 pointer-events-none"></div>
    <div class="absolute top-10 start-10 w-72 h-72 bg-maisara-ember/10 rounded-full blur-3xl float-shape"></div>
    <div class="absolute bottom-10 end-10 w-56 h-56 bg-maisara-navy-light/15 rounded-full blur-3xl float-shape" style="animation-delay: -3s;"></div>
    <div class="absolute top-1/2 start-1/2 w-40 h-40 bg-maisara-ember/5 rounded-full blur-2xl float-shape" style="animation-delay: -1.5s;"></div>

    <div class="container-modern relative z-10 text-center">
        <div class="max-w-2xl mx-auto fade-up">
            <h2 class="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-6">
                <span class="gradient-text">{{ $title }}</span>
            </h2>

            @if($subtitle)
                <p class="text-lg md:text-xl text-white/80 mb-10 leading-relaxed">
                    {{ $subtitle }}
                </p>
            @endif

            <a href="{{ $buttonUrl }}" class="btn-glow inline-flex items-center gap-2">
                {{ $buttonText }}
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>

            {{ $slot ?? '' }}
        </div>
    </div>
</section>
