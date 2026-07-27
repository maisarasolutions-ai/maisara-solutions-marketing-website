@props([
    'variant' => 'primary',
    'size' => 'md',
    'disabled' => false,
])

@php
$baseClasses = 'inline-flex items-center justify-center font-semibold rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';

$variants = [
    'primary' => 'bg-maisara-ember text-white hover:bg-maisara-ember-dark focus:ring-maisara-ember active:bg-maisara-ember-dark',
    'secondary' => 'bg-maisara-navy text-white hover:bg-maisara-navy-light focus:ring-maisara-navy active:bg-maisara-navy-dark',
    'outline' => 'border-2 border-maisara-ember text-maisara-ember bg-transparent hover:bg-maisara-ember hover:text-white focus:ring-maisara-ember active:bg-maisara-ember-dark',
];

$sizes = [
    'sm' => 'px-4 py-2 text-sm',
    'md' => 'px-6 py-3 text-base',
    'lg' => 'px-8 py-4 text-lg',
];

$classes = $baseClasses.' '.$variants[$variant].' '.$sizes[$size];
@endphp

<button {{ $attributes->merge(['class' => $classes, 'disabled' => $disabled]) }}>
    {{ $slot }}
</button>
