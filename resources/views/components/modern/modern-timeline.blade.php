@props([
    'items' => [],
])

<div class="timeline-line">
    @foreach($items as $index => $item)
        <div class="timeline-item fade-in" style="transition-delay: {{ $index * 150 }}ms;">
            <div class="timeline-date">
                {{ $item['date'] ?? '' }}
            </div>
            <h4 class="timeline-title">
                {{ $item['title'] ?? '' }}
            </h4>
            <p class="timeline-desc">
                {{ $item['description'] ?? '' }}
            </p>
        </div>
    @endforeach
</div>
