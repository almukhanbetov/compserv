<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Service;
use App\Models\Education;

class DemoStructureSeeder extends Seeder
{
    public function run(): void
    {
        // Очистка (dev режим)
        Education::truncate();
        Service::truncate();
        Category::truncate();

        /*
        |--------------------------------------------------------------------------
        | SERVICE CATEGORIES
        |--------------------------------------------------------------------------
        */

        $servicesRoot = Category::create([
            'name' => 'Services',
            'slug' => 'services',
            'type' => 'service',
            'position' => 1,
        ]);

        $webCategory = Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'type' => 'service',
            'parent_id' => $servicesRoot->id,
            'position' => 1,
        ]);

        $devopsCategory = Category::create([
            'name' => 'DevOps',
            'slug' => 'devops',
            'type' => 'service',
            'parent_id' => $servicesRoot->id,
            'position' => 2,
        ]);

        /*
        |--------------------------------------------------------------------------
        | EDUCATION CATEGORIES
        |--------------------------------------------------------------------------
        */

        $educationRoot = Category::create([
            'name' => 'Education',
            'slug' => 'education',
            'type' => 'education',
            'position' => 2,
        ]);

        $backendCategory = Category::create([
            'name' => 'Backend',
            'slug' => 'backend',
            'type' => 'education',
            'parent_id' => $educationRoot->id,
            'position' => 1,
        ]);

        $frontendCategory = Category::create([
            'name' => 'Frontend',
            'slug' => 'frontend',
            'type' => 'education',
            'parent_id' => $educationRoot->id,
            'position' => 2,
        ]);

        /*
        |--------------------------------------------------------------------------
        | SERVICES
        |--------------------------------------------------------------------------
        */

        Service::create([
            'title' => 'Laravel SaaS Development',
            'slug' => Str::slug('Laravel SaaS Development'),
            'short_description' => 'Full SaaS platform development',
            'price' => 1500,
            'category_id' => $webCategory->id,
            'position' => 1,
        ]);

        Service::create([
            'title' => 'CI/CD Pipeline Setup',
            'slug' => Str::slug('CI/CD Pipeline Setup'),
            'short_description' => 'GitHub Actions + Docker deployment',
            'price' => 900,
            'category_id' => $devopsCategory->id,
            'position' => 1,
        ]);

        /*
        |--------------------------------------------------------------------------
        | EDUCATIONS
        |--------------------------------------------------------------------------
        */

        Education::create([
            'title' => 'Laravel from Zero to SaaS',
            'slug' => Str::slug('Laravel from Zero to SaaS'),
            'short_description' => 'Build real SaaS project',
            'duration_days' => 30,
            'price' => 300,
            'level' => 'advanced',
            'category_id' => $backendCategory->id,
            'position' => 1,
        ]);

        Education::create([
            'title' => 'React for Backend Developers',
            'slug' => Str::slug('React for Backend Developers'),
            'short_description' => 'Modern React + API integration',
            'duration_days' => 20,
            'price' => 200,
            'level' => 'intermediate',
            'category_id' => $frontendCategory->id,
            'position' => 1,
        ]);
    }
}
