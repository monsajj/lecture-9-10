<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        View::composer(
//            ['layouts.front.app', 'front.categories.sidebar-category', 'layouts.front.category-nav'],
//            'App\Http\ViewComposer\CategoriesComposer');
//        View::composer(
//            'layouts.front.app',
//            'App\Http\ViewComposer\CartComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
