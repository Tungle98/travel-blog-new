<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $blogPopular = Blog::query()->where('is_top', 1)->where('status', 1)->take(3)->get();
        $categories = Category::query()->where('status', 1)->latest()->take(5)->get();
        View::share(['blogPopular' => $blogPopular, 'categories' => $categories]);
    }
}
