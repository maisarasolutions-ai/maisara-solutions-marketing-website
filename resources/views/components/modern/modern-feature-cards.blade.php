@props([
    'features' => [],
    'columns' => 3,
])

@php
$gridClasses = [
    2 => 'grid-feature-cols-2',
    3 => 'grid-feature-cols-3',
    4 => 'grid-feature-cols-4',
];
@endphp

<div class="grid-feature {{ $gridClasses[$columns] ?? $gridClasses[3] }}">
    @foreach($features as $index => $feature)
        <div class="card-modern fade-up" style="transition-delay: {{ $index * 100 }}ms;">
            <div class="icon-card-icon mb-4">
                <i data-lucide="{{ $feature['icon'] ?? 'help-circle' }}" class="w-6 h-6"></i>
            </div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy mb-2">
                {{ $feature['title'] ?? '' }}
            </h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                {{ $feature['description'] ?? '' }}
            </p>
        </div>
    @endforeach
</div>
