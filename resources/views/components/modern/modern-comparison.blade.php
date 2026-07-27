@props([
    'title' => '',
    'left' => ['label' => '', 'items' => []],
    'right' => ['label' => '', 'items' => []],
    'highlight' => null,
])

<div class="fade-up">
    @if($title)
        <h3 class="font-display text-2xl font-bold text-maisara-navy text-center mb-8">{{ $title }}</h3>
    @endif

    <div class="comparison-card">
        <div class="comparison-side {{ $highlight === 'left' ? 'ring-2 ring-maisara-ember' : '' }}">
            <div class="comparison-label {{ $highlight === 'left' ? 'text-maisara-ember' : 'comparison-label-before' }}">
                {{ $left['label'] ?? 'Option A' }}
            </div>
            <ul class="comparison-list">
                @foreach($left['items'] ?? [] as $item)
                    <li>
                        <span class="comparison-icon comparison-icon-check">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="comparison-side {{ $highlight === 'right' ? 'ring-2 ring-maisara-ember' : '' }}">
            <div class="comparison-label {{ $highlight === 'right' ? 'text-maisara-ember' : 'comparison-label-after' }}">
                {{ $right['label'] ?? 'Option B' }}
            </div>
            <ul class="comparison-list">
                @foreach($right['items'] ?? [] as $item)
                    <li>
                        <span class="comparison-icon comparison-icon-x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
