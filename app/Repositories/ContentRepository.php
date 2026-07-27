<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface ContentRepository
{
    public function findBySlug(string $slug, string $locale): ?Model;

    public function getAllPublished(string $locale);
}
