<div class="flex items-center space-x-3 p-4 bg-maisara-ivory rounded-lg">
    <div class="flex-shrink-0 w-12 h-12 bg-maisara-ember/10 rounded-lg flex items-center justify-center">
        <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
        </svg>
    </div>
    <div>
        <h4 class="font-semibold text-maisara-navy">{{ $title }}</h4>
        <p class="text-sm text-gray-600">{{ $description }}</p>
    </div>
    {{ $slot }}
</div>
