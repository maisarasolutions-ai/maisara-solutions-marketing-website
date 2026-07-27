<?php

namespace App\Services;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class ContentService
{
    protected Filesystem $files;
    protected string $contentPath;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;
        $this->contentPath = resource_path('content');
    }

    public function load(string $module, string $locale = 'en'): ?string
    {
        $paths = [
            resource_path("content/{$module}/{$locale}.md"),
            resource_path("content/{$module}/index.md"),
            resource_path("content/{$module}.md"),
        ];

        foreach ($paths as $path) {
            if ($this->files->exists($path)) {
                return $this->parse($this->files->get($path));
            }
        }

        return null;
    }

    public function getSections(string $module, string $locale = 'en'): array
    {
        $content = $this->load($module, $locale);
        if (!$content) {
            return [];
        }

        $sections = explode('---', $content);
        return array_values(array_filter(array_map('trim', $sections)));
    }

    protected function parse(string $markdown): string
    {
        $html = $this->markdownToHtml($markdown);
        return $this->applyRtlClasses($html);
    }

    protected function markdownToHtml(string $markdown): string
    {
        $lines = explode("\n", $markdown);
        $html = '';
        $inList = false;

        foreach ($lines as $line) {
            $trimmed = trim($line);

            if ($trimmed === '') {
                if ($inList) {
                    $html .= "</ul>\n";
                    $inList = false;
                }
                continue;
            }

            if (str_starts_with($trimmed, '# ')) {
                $html .= '<h1>' . $this->inlineMarkup(substr($trimmed, 2)) . "</h1>\n";
            } elseif (str_starts_with($trimmed, '## ')) {
                $html .= '<h2>' . $this->inlineMarkup(substr($trimmed, 3)) . "</h2>\n";
            } elseif (str_starts_with($trimmed, '### ')) {
                $html .= '<h3>' . $this->inlineMarkup(substr($trimmed, 4)) . "</h3>\n";
            } elseif (str_starts_with($trimmed, '- ')) {
                if (!$inList) {
                    $html .= "<ul>\n";
                    $inList = true;
                }
                $html .= '<li>' . $this->inlineMarkup(substr($trimmed, 2)) . "</li>\n";
            } elseif (preg_match('/^\d+\.\s/', $trimmed)) {
                if (!$inList) {
                    $html .= "<ol>\n";
                    $inList = true;
                }
                $html .= '<li>' . $this->inlineMarkup(preg_replace('/^\d+\.\s/', '', $trimmed)) . "</li>\n";
            } elseif (str_starts_with($trimmed, '> ')) {
                $html .= '<blockquote>' . $this->inlineMarkup(substr($trimmed, 2)) . "</blockquote>\n";
            } elseif (preg_match('/^\[.*\]\(.*\)$/', $trimmed)) {
                $html .= '<p>' . $this->inlineMarkup($trimmed) . "</p>\n";
            } else {
                if ($inList) {
                    $html .= "</ul>\n";
                    $inList = false;
                }
                $html .= '<p>' . $this->inlineMarkup($trimmed) . "</p>\n";
            }
        }

        if ($inList) {
            $html .= "</ul>\n";
        }

        return $html;
    }

    protected function inlineMarkup(string $text): string
    {
        $text = htmlspecialchars($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $text = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $text);
        $text = preg_replace('/\*(.+?)\*/', '<em>$1</em>', $text);
        $text = preg_replace('/`(.+?)`/', '<code>$1</code>', $text);

        $text = preg_replace_callback(
            '/\[([^\]]+)\]\(([^)]+)\)/',
            fn($matches) => '<a href="' . htmlspecialchars($matches[2], ENT_QUOTES | ENT_HTML5, 'UTF-8') . '">' . $matches[1] . '</a>',
            $text
        );

        return $text;
    }

    protected function applyRtlClasses(string $html): string
    {
        $locale = app()->getLocale();
        $dir = $locale === 'ar' ? 'rtl' : 'ltr';

        return str_replace(
            ['<h1', '<h2', '<h3', '<ul', '<ol', '<blockquote', '<p'],
            ["<h1 class=\"{$dir}\"", "<h2 class=\"{$dir}\"", "<h3 class=\"{$dir}\"", "<ul class=\"{$dir}\"", "<ol class=\"{$dir}\"", "<blockquote class=\"{$dir}\"", "<p class=\"{$dir}\""],
            $html
        );
    }
}
