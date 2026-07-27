<x-ui.card>
    <div class="flex items-center space-x-4 mb-4">
        <div class="w-16 h-16 bg-maisara-ivory rounded-full flex items-center justify-center">
            <span class="font-display text-xl font-semibold text-maisara-navy">{{ substr($name, 0, 1) }}</span>
        </div>
        <div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy">{{ $name }}</h3>
            <p class="text-sm text-gray-600">{{ $role }}</p>
        </div>
    </div>
    <p class="text-gray-600 italic mb-4">"{{ $quote ?? '' }}"</p>
    {{ $slot }}
</x-ui.card>
