@props([
    'text' => '',
    'icon' => null,
])

<span class="section-label">
    @if($icon)
        <i data-lucide="{{ $icon }}" class="w-4 h-4"></i>
    @endif
    {{ $text }}
</span>
