<x-ui.card>
    <div class="flex items-start justify-between mb-3">
        <span class="text-sm font-semibold text-maisara-ember uppercase tracking-wide">{{ $type ?? '' }}</span>
        <span class="text-sm text-gray-500">{{ $date ?? '' }}</span>
    </div>
    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ $title }}</h3>
    <p class="text-gray-600 mb-4">{{ $excerpt }}</p>
    <div class="flex items-center space-x-4">
        <a href="{{ $link ?? '#' }}" class="text-maisara-ember font-semibold hover:text-maisara-ember-dark transition-colors">
            {{ __('Learn More') }} →
        </a>
        <span class="text-sm text-gray-500">{{ $location ?? '' }}</span>
    </div>
    {{ $slot }}
</x-ui.card>
