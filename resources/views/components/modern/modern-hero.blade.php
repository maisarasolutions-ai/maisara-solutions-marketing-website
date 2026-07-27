@props([
    'title' => '',
    'subtitle' => '',
    'badge' => null,
    'badgeIcon' => null,
])

@php
$dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
@endphp

<section class="relative min-h-screen flex items-center gradient-navy overflow-hidden" dir="{{ $dir }}">
    <div class="absolute inset-0 bg-dot-pattern-navy opacity-40 pointer-events-none"></div>
    <div class="absolute top-20 end-20 w-64 h-64 bg-maisara-ember/10 rounded-full blur-3xl float-shape"></div>
    <div class="absolute bottom-20 start-20 w-48 h-48 bg-maisara-navy-light/20 rounded-full blur-3xl float-shape" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 start-1/4 w-32 h-32 bg-maisara-ember/8 rounded-full blur-2xl float-shape" style="animation-delay: -4s;"></div>

    <div class="container-modern relative z-10 py-20">
        <div class="max-w-3xl fade-up">
            @if($badge)
                <div class="hero-glass-badge inline-flex items-center gap-2 px-4 py-2 rounded-full text-white/90 text-sm font-medium mb-6">
                    @if($badgeIcon)
                        <i data-lucide="{{ $badgeIcon }}" class="w-4 h-4"></i>
                    @endif
                    <span>{{ $badge }}</span>
                </div>
            @endif

            <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 text-balance">
                <span class="gradient-text">{{ $title }}</span>
            </h1>

            @if($subtitle)
                <p class="text-lg md:text-xl text-white/80 leading-relaxed max-w-2xl">
                    {{ $subtitle }}
                </p>
            @endif

            {{ $slot }}
        </div>
    </div>
</section>
