<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getTree()
    {
        return Category::with(['children', 'services', 'educations'])
            ->whereNull('parent_id')
            ->orderBy('position')
            ->get();
    }

    public function toggle(Category $category)
    {
        $category->is_active = !$category->is_active;
        $category->save();

        return $category;
    }
}