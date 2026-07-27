<x-ui.card>
    <div class="flex items-start space-x-4">
        <div class="flex-shrink-0 w-12 h-12 bg-maisara-ember/10 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
        </div>
        <div>
            <h3 class="font-display text-lg font-semibold text-maisara-navy">{{ $title }}</h3>
            <p class="text-gray-600 text-sm mt-1">{{ $excerpt }}</p>
        </div>
    </div>
    {{ $slot }}
</x-ui.card>
