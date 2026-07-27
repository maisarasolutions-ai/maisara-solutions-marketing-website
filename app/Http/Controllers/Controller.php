<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use App\Services\ContentService;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected ContentService $content;

    public function __construct(ContentService $content)
    {
        $this->content = $content;
    }

    protected function sharedViewData(): array
    {
        return [
            'availableLocales' => config('app.available_locales', ['en', 'ar']),
            'currentLocale' => app()->getLocale(),
        ];
    }

    protected function view(string $view, array $data = []): View
    {
        $module = $this->guessModuleFromView($view);
        $locale = app()->getLocale();

        $contentData = [];
        if ($module) {
            $sections = $this->content->getSections($module, $locale);
            $contentData = [
                'content' => $this->content->load($module, $locale),
                'contentSections' => $sections,
            ];
        }

        $pageData = $this->loadPageData($module, $locale);

        return view($view, array_merge($this->sharedViewData(), $contentData, $pageData, $data));
    }

    protected function loadPageData(?string $module, string $locale): array
    {
        if (!$module) {
            return [];
        }

        $path = resource_path("data/{$locale}/{$module}/index.php");

        if (!file_exists($path)) {
            return [];
        }

        return ['pageData' => require $path];
    }

    protected function guessModuleFromView(string $view): ?string
    {
        $parts = explode('.', $view);

        if (count($parts) >= 2) {
            return implode('/', array_slice($parts, 0, -1));
        }

        return $parts[0] ?? null;
    }
}
