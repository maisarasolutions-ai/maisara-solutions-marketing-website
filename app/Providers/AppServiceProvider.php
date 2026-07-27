<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ContentService;
use Illuminate\Filesystem\Filesystem;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(ContentService::class, function ($app) {
            return new ContentService(new Filesystem());
        });
    }

    public function boot(): void
    {
        //
    }
}
