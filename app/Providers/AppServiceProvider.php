<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.st
     *
     * @return void
     */
    public function boot()
    {
        // register view composer to hook into the
        // posts sidebar to provide needed data
        view()->composer('posts.sidebar', function ($view)
        {
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->get());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
