<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

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
        // Pass parent categories with their subcategories to master layout
        View::composer('master', function ($view) {
            $categories = Category::whereNull('parent_id')
                ->with('children') // Prevents N+1 query performance issues
                ->orderBy('name', 'asc')
                ->get();

            $view->with('categories', $categories);
        });
    }
}