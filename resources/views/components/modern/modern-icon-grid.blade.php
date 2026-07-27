@props([
    'items' => [],
])

<div class="icon-grid">
    @foreach($items as $index => $item)
        <div class="icon-card fade-up" style="transition-delay: {{ $index * 100 }}ms;">
            <div class="icon-card-icon">
                <i data-lucide="{{ $item['icon'] ?? 'help-circle' }}" class="w-6 h-6"></i>
            </div>
            <h4 class="icon-card-title">
                {{ $item['title'] ?? '' }}
            </h4>
            <p class="icon-card-text">
                {{ $item['description'] ?? '' }}
            </p>
        </div>
    @endforeach
</div>
