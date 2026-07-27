@props([
    'sections' => [],
])

@php
$bgCycle = ['default', 'mesh', 'ivory', 'subtle'];
$bgIndex = 0;

function detectSectionType(string $html): string {
    $lower = strtolower($html);

    if (str_starts_with(trim($html), '<h1')) {
        return 'hero';
    }

    if (str_contains($lower, 'timeline') || str_contains($lower, 'evolution') || str_contains($lower, 'history')) {
        return 'timeline';
    }

    if (str_contains($lower, 'step') || str_contains($lower, 'process')) {
        return 'process';
    }

    if (str_contains($lower, 'comparison') || str_contains($lower, 'versus') || str_contains($lower, ' vs ')) {
        return 'comparison';
    }

    if (str_contains($lower, 'confidentiality') || str_contains($lower, 'trust') || str_contains($lower, 'security')) {
        return 'icon-grid';
    }

    $h2Count = substr_count($html, '<h2');
    $h3Count = substr_count($html, '<h3');
    $ulCount = substr_count($html, '<ul');
    $olCount = substr_count($html, '<ol');

    if ($h2Count >= 2 && ($ulCount > 0 || $olCount > 0)) {
        return 'feature-cards';
    }

    if ($h2Count >= 2 && $h3Count >= 2) {
        return 'feature-cards';
    }

    if ($ulCount > 0 || $olCount > 0) {
        return 'feature-cards';
    }

    if (preg_match('/\d+%|\$\d+|\d+\s*(million|billion|users|clients|years|projects|countries)/i', $lower)) {
        return 'stats';
    }

    return 'default';
}

function extractListItems(string $html): array {
    $items = [];
    preg_match_all('/<li>(.*?)<\/li>/s', $html, $matches);
    foreach ($matches[1] as $item) {
        $items[] = strip_tags($item);
    }
    return $items;
}

function extractH3Items(string $html): array {
    $items = [];
    preg_match_all('/<h3>(.*?)<\/h3>/s', $html, $h3Matches);
    preg_match_all('/<p>(.*?)<\/p>/s', $html, $pMatches);

    $count = min(count($h3Matches[1]), count($pMatches[1]));
    for ($i = 0; $i < $count; $i++) {
        $items[] = [
            'title' => strip_tags($h3Matches[1][$i]),
            'description' => strip_tags($pMatches[1][$i]),
        ];
    }
    return $items;
}

function extractTimelineItems(string $html): array {
    $items = [];
    preg_match_all('/<h3>(.*?)<\/h3>/s', $html, $h3Matches);
    preg_match_all('/<p>(.*?)<\/p>/s', $html, $pMatches);

    $count = min(count($h3Matches[1]), count($pMatches[1]));
    for ($i = 0; $i < $count; $i++) {
        $items[] = [
            'date' => '',
            'title' => strip_tags($h3Matches[1][$i]),
            'description' => strip_tags($pMatches[1][$i]),
        ];
    }
    return $items;
}

function extractProcessSteps(string $html): array {
    $steps = [];
    preg_match_all('/<h3>(.*?)<\/h3>/s', $html, $h3Matches);
    preg_match_all('/<p>(.*?)<\/p>/s', $html, $pMatches);

    $count = min(count($h3Matches[1]), count($pMatches[1]));
    for ($i = 0; $i < $count; $i++) {
        $steps[] = [
            'number' => str_pad($i + 1, 2, '0', STR_PAD_LEFT),
            'title' => strip_tags($h3Matches[1][$i]),
            'description' => strip_tags($pMatches[1][$i]),
        ];
    }
    return $steps;
}

function extractComparisonData(string $html): array {
    $left = ['label' => 'Before', 'items' => []];
    $right = ['label' => 'After', 'items' => []];

    preg_match_all('/<li>(.*?)<\/li>/s', $html, $matches);
    $items = array_map(fn($item) => strip_tags($item), $matches[1]);

    $half = intdiv(count($items), 2);
    $left['items'] = array_slice($items, 0, $half);
    $right['items'] = array_slice($items, $half);

    return ['left' => $left, 'right' => $right];
}

function extractStats(string $html): array {
    $stats = [];
    preg_match_all('/<li>(.*?)<\/li>/s', $html, $matches);
    preg_match_all('/<h3>(.*?)<\/h3>/s', $html, $h3Matches);

    $count = min(count($h3Matches[1]), count($matches[1]));
    for ($i = 0; $i < $count; $i++) {
        $stats[] = [
            'number' => strip_tags($h3Matches[1][$i]),
            'label' => strip_tags($matches[1][$i]),
            'description' => '',
        ];
    }
    return $stats;
}

function getIconForKeyword(string $text): string {
    $keywords = [
        'security' => 'shield',
        'privacy' => 'lock',
        'data' => 'database',
        'cloud' => 'cloud',
        'ai' => 'brain',
        'analytics' => 'bar-chart-3',
        'mobile' => 'smartphone',
        'web' => 'globe',
        'design' => 'palette',
        'development' => 'code',
        'support' => 'headphones',
        'consulting' => 'users',
        'strategy' => 'target',
        'innovation' => 'lightbulb',
        'growth' => 'trending-up',
        'quality' => 'award',
        'team' => 'users',
        'experience' => 'star',
        'reliability' => 'check-circle',
        'speed' => 'zap',
        'default' => 'check-circle-2',
    ];

    $lower = strtolower($text);
    foreach ($keywords as $key => $icon) {
        if ($key === 'default') continue;
        if (str_contains($lower, $key)) {
            return $icon;
        }
    }
    return $keywords['default'];
}

$dir = app()->getLocale() === 'ar' ? 'rtl' : 'ltr';
@endphp

<div dir="{{ $dir }}">
    @foreach($sections as $sectionHtml)
        @php
            $type = detectSectionType($sectionHtml);

            $headingMatch = [];
            preg_match('/<h[12][^>]*>(.*?)<\/h[12]>/s', $sectionHtml, $headingMatch);
            $heading = isset($headingMatch[1]) ? strip_tags($headingMatch[1]) : '';

            $contentWithoutHeading = preg_replace('/<h[12][^>]*>.*?<\/h[12]>/s', '', $sectionHtml);
            $contentWithoutHeading = trim($contentWithoutHeading);

            $bg = $bgCycle[$bgIndex % count($bgCycle)];
            $bgIndex++;

            switch ($type) {
                case 'hero':
                    echo '<x-modern.modern-hero :title="$heading" :subtitle="$contentWithoutHeading" />';
                    break;

                case 'feature-cards':
                    $features = extractH3Items($sectionHtml);
                    if (empty($features)) {
                        $features = collect(extractListItems($sectionHtml))->map(fn($item) => [
                            'icon' => getIconForKeyword($item),
                            'title' => $item,
                            'description' => '',
                        ])->toArray();
                    }
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <x-modern.modern-feature-cards :features="$features" :columns="3" />
                    </x-modern.modern-section>';
                    break;

                case 'icon-grid':
                    $items = collect(extractListItems($sectionHtml))->map(fn($item) => [
                        'icon' => getIconForKeyword($item),
                        'title' => $item,
                        'description' => '',
                    ])->toArray();
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <x-modern.modern-icon-grid :items="$items" />
                    </x-modern.modern-section>';
                    break;

                case 'stats':
                    $stats = extractStats($sectionHtml);
                    echo '<x-modern.modern-section title="'.$heading.'" background="navy">
                        <x-modern.modern-stats :stats="$stats" />
                    </x-modern.modern-section>';
                    break;

                case 'timeline':
                    $items = extractTimelineItems($sectionHtml);
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <x-modern.modern-timeline :items="$items" />
                    </x-modern.modern-section>';
                    break;

                case 'process':
                    $steps = extractProcessSteps($sectionHtml);
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <x-modern.modern-process :steps="$steps" />
                    </x-modern.modern-section>';
                    break;

                case 'comparison':
                    $comparison = extractComparisonData($sectionHtml);
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <x-modern.modern-comparison
                            title="'.$heading.'"
                            :left="$comparison[\'left\']"
                            :right="$comparison[\'right\']"
                            highlight="right"
                        />
                    </x-modern.modern-section>';
                    break;

                default:
                    echo '<x-modern.modern-section title="'.$heading.'" background="'.$bg.'">
                        <div class="modern-content-section prose max-w-none">
                            '.$contentWithoutHeading.'
                        </div>
                    </x-modern.modern-section>';
                    break;
            }
        @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
