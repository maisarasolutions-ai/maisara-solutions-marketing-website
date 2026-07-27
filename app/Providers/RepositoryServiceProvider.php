<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            \App\Repositories\ContentRepository::class,
            \App\Repositories\EloquentContentRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
