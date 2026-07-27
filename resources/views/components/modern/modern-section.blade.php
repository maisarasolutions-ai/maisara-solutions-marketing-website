@props([
    'title' => null,
    'subtitle' => null,
    'label' => null,
    'background' => 'default',
    'padding' => 'default',
])

@php
$bgClasses = [
    'default' => 'bg-white',
    'navy' => 'gradient-navy text-white',
    'ivory' => 'bg-maisara-ivory',
    'mesh' => 'bg-mesh text-maisara-navy',
    'subtle' => 'bg-gray-50/50',
];

$paddingClasses = $padding === 'large' ? 'section-spacing' : 'py-16 md:py-24';
@endphp

<section class="{{ $bgClasses[$background] ?? $bgClasses['default'] }} {{ $paddingClasses }} relative overflow-hidden">
    @if($background === 'mesh')
        <div class="absolute inset-0 bg-grid-pattern opacity-30 pointer-events-none"></div>
    @endif

    <div class="container-modern relative z-10">
        @if($label)
            <div class="section-label">
                {{ $label }}
            </div>
        @endif

        @if($title)
            <h2 class="font-display text-3xl md:text-4xl font-bold mb-4 {{ $background === 'navy' || $background === 'mesh' ? 'text-white' : 'text-maisara-navy' }}">
                {{ $title }}
            </h2>
        @endif

        @if($subtitle)
            <p class="text-lg max-w-2xl mb-12 {{ $background === 'navy' || $background === 'mesh' ? 'text-white/80' : 'text-gray-600' }}">
                {{ $subtitle }}
            </p>
        @endif

        <div class="{{ $background === 'navy' || $background === 'mesh' ? 'text-white' : 'text-maisara-navy' }}">
            {{ $slot }}
        </div>
    </div>
</section>
