<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $category = \App\Models\Category::where('type','education')
        ->first();

    \App\Models\Education::create([
        'title' => 'Laravel 12 Masterclass',
        'slug' => 'laravel-12',
        'price' => 300,
        'duration_days' => 30,
        'level' => 'intermediate',
        'category_id' => $category->id
    ]);
}
}
