<x-ui.card>
    <div class="flex items-center space-x-4 mb-4">
        <div class="w-12 h-12 bg-maisara-ivory rounded-lg flex items-center justify-center">
            <span class="font-display text-lg font-semibold text-maisara-navy">{{ substr($name, 0, 1) }}</span>
        </div>
        <div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy">{{ $name }}</h3>
            <p class="text-sm text-gray-600">{{ $industry ?? '' }}</p>
        </div>
    </div>
    <p class="text-gray-600 text-sm mb-4">{{ $description ?? '' }}</p>
    <div class="flex flex-wrap gap-2">
        @foreach($services ?? [] as $service)
            <span class="px-2 py-1 bg-maisara-ivory text-maisara-navy text-xs rounded-full">{{ $service }}</span>
        @endforeach
    </div>
    {{ $slot }}
</x-ui.card>
