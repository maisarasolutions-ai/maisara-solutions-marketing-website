<x-ui.card>
    <span class="text-sm text-maisara-ember font-semibold uppercase tracking-wide">{{ $category ?? '' }}</span>
    <h3 class="font-display text-lg font-semibold text-maisara-navy mt-2 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 text-sm mb-3">{{ $excerpt }}</p>
    <div class="flex items-center justify-between">
        <span class="text-xs text-gray-500">{{ $date ?? '' }}</span>
        <a href="{{ $link ?? '#' }}" class="text-maisara-ember font-semibold text-sm hover:text-maisara-ember-dark transition-colors">
            {{ __('Read More') }} →
        </a>
    </div>
    {{ $slot }}
</x-ui.card>
