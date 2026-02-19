<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = Category::create([
        'name' => 'Услуги',
        'slug' => 'services',
        'type' => 'service'
    ]);

    Category::create([
        'parent_id' => $service->id,
        'name' => 'Разработка',
        'slug' => 'dev',
        'type' => 'service'
    ]);

    Category::create([
        'parent_id' => $service->id,
        'name' => 'DevOps',
        'slug' => 'devops',
        'type' => 'service'
    ]);

    $education = Category::create([
        'name' => 'Обучение',
        'slug' => 'education',
        'type' => 'education'
    ]);

    Category::create([
        'parent_id' => $education->id,
        'name' => 'Go',
        'slug' => 'go',
        'type' => 'education'
    ]);

    Category::create([
            'parent_id' => $education->id,
            'name' => 'Laravel',
            'slug' => 'laravel',
            'type' => 'education'
        ]);
    }
}
