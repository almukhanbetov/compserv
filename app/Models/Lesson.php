<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model
{
    protected $fillable = [
        'education_id',
        'title',
        'slug',
        'content',
        'position',
        'is_active'
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class)
            ->orderBy('position');
    }

    // Авто slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($lesson) {
            $lesson->slug = Str::slug($lesson->title);
        });
    }

    // Связь с курсом
    public function education()
    {
        return $this->belongsTo(Education::class);
    }
}
