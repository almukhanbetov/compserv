<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $fillable = [
        'language_id',
        'title',
        'description',
        'starter_code',
        'tests_json',
        'difficulty',
        'is_active'
    ];

    protected $casts = [
        'tests_json' => 'array',
        'difficulty' => 'integer',
        'is_active' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeDifficulty($query, int $level)
    {
        return $query->where('difficulty', $level);
    }
}
