<div x-data="{ open: false }" class="border border-gray-200 rounded-lg">
    <button @click="open = !open" class="w-full px-6 py-4 flex items-center justify-between text-left hover:bg-gray-50 transition-colors">
        <span class="font-semibold text-maisara-navy">{{ $question }}</span>
        <svg class="w-5 h-5 text-maisara-ember transform transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>
    <div x-show="open" x-collapse class="px-6 pb-4 text-gray-600">
        {{ $answer }}
    </div>
</div>
