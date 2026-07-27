<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'session_id',
        'type',
        'responses',
        'score',
        'recommendation',
        'completed_at',
    ];

    protected $casts = [
        'responses' => 'array',
        'completed_at' => 'datetime',
    ];
}
