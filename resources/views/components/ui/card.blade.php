@props([
    'image' => null,
    'title' => '',
    'excerpt' => '',
])

<div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
    @if($image)
        <div class="aspect-video bg-maisara-ivory">
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
        </div>
    @endif
    <div class="p-6">
        <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-4">{{ $excerpt }}</p>
        {{ $slot }}
    </div>
</div>
