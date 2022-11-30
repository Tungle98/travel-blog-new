<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\ConfigurationSystem;
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
        $query = ConfigurationSystem::query()->where('status', '=',1);
        $config = $query->whereIn('type', ['config'])->get();
        $arrayConfig = [];
        foreach ($config as $value) {
            $arrayConfig[$value->title] = $value->description;
        }
        $blogPopular = Blog::query()->where('is_top', 1)->where('status', 1)->take(3)->get();
        $categories = Category::query()->where('status', 1)->latest()->take(5)->get();
        View::share(['blogPopular' => $blogPopular, 'categories' => $categories, 'contact' => $arrayConfig]);
    }
}
