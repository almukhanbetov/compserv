<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'type',
        'position',
        'is_active'
    ];
    protected static function booted()
    {
        static::saving(function ($category) {
            if (!$category->slug) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')
                    ->orderBy('position');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }
}

