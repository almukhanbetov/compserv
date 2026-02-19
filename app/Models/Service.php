<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'price',
        'is_active',
        'position'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
