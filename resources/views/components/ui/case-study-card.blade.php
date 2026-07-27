<x-ui.card>
    <div class="aspect-video bg-maisara-ivory mb-4">
        <img src="{{ $image ?? '' }}" alt="{{ $title }}" class="w-full h-full object-cover rounded-lg">
    </div>
    <span class="text-sm text-maisara-ember font-semibold uppercase tracking-wide">{{ $category ?? '' }}</span>
    <h3 class="font-display text-xl font-semibold text-maisara-navy mt-2 mb-2">{{ $title }}</h3>
    <p class="text-gray-600 mb-4">{{ $excerpt }}</p>
    <a href="{{ $link ?? '#' }}" class="text-maisara-ember font-semibold hover:text-maisara-ember-dark transition-colors">
        {{ __('Read Case Study') }} →
    </a>
    {{ $slot }}
</x-ui.card>
