<?php

namespace App\Repositories;

use App\Models\ContentPage;
use App\Repositories\ContentRepository;
use Illuminate\Database\Eloquent\Builder;

class EloquentContentRepository implements ContentRepository
{
    public function findBySlug(string $slug, string $locale): ?ContentPage
    {
        return ContentPage::where('slug', $slug)
            ->where('locale', $locale)
            ->where('is_published', true)
            ->first();
    }

    public function getAllPublished(string $locale)
    {
        return ContentPage::where('locale', $locale)
            ->where('is_published', true)
            ->get();
    }
}
