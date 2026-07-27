@props([
    'steps' => [],
])

<div class="grid grid-cols-1 md:grid-cols-{{ min(count($steps), 4) }} gap-8 md:gap-4">
    @foreach($steps as $index => $step)
        <div class="relative fade-up" style="transition-delay: {{ $index * 100 }}ms;">
            <div class="flex flex-col items-center text-center md:items-start md:text-start">
                <div class="process-number mb-4">
                    {{ $step['number'] ?? str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                </div>
                <div class="process-content">
                    <h4 class="font-display text-base font-semibold text-maisara-navy mb-2">
                        {{ $step['title'] ?? '' }}
                    </h4>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        {{ $step['description'] ?? '' }}
                    </p>
                </div>
            </div>
            @if(!$loop->last)
                <div class="hidden md:block process-connector absolute top-8 start-full w-full"></div>
            @endif
        </div>
    @endforeach
</div>
