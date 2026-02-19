<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $category = \App\Models\Category::where('type','service')
        ->first();

    \App\Models\Service::create([
        'title' => 'Laravel Development',
        'slug' => 'laravel-dev',
        'price' => 500,
        'category_id' => $category->id
    ]);
}
}
