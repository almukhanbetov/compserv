<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('includes-admin.aside', function ($view) {
            $categories = Category::whereNull('parent_id')
                ->where('is_active', true)
                ->with([
                    'children',
                    'services',
                    'educations'
                ])
                ->orderBy('position')
                ->get();

            $view->with('adminCategories', $categories);
        });
    }
}
