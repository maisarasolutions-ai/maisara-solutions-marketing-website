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

        return view($view, array_merge($this->sharedViewData(), $contentData, $data));
    }

    protected function guessModuleFromView(string $view): ?string
    {
        $parts = explode('.', $view);
        if (isset($parts[0])) {
            return $parts[0];
        }

        return null;
    }
}
