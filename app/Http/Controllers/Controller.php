<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function sharedViewData(): array
    {
        return [
            'availableLocales' => config('app.available_locales', ['en', 'ar']),
            'currentLocale' => app()->getLocale(),
        ];
    }

    protected function view(string $view, array $data = []): View
    {
        return view($view, array_merge($this->sharedViewData(), $data));
    }
}
