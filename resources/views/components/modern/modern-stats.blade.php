@props([
    'stats' => [],
])

<div class="glass-panel p-8 md:p-12">
    <div class="stats-grid">
        @foreach($stats as $index => $stat)
            <div class="stat-card fade-up" style="transition-delay: {{ $index * 100 }}ms;">
                <div class="stat-number">
                    {{ $stat['number'] ?? '0' }}
                </div>
                <div class="stat-label">
                    {{ $stat['label'] ?? '' }}
                </div>
                @if(!empty($stat['description']))
                    <p class="text-sm text-gray-500 mt-2">
                        {{ $stat['description'] }}
                    </p>
                @endif
            </div>
        @endforeach
    </div>
</div>
