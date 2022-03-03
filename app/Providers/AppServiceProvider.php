<?php

namespace App\Providers;

use App\Models\Actualite;
use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
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
        view()->composer('*', function ($view) {
            $categoriesMenu = Categorie::all();
            $collectionsMenu = Collection::all();
            $actualiteMenu = Actualite::inRandomOrder()->take(5)->get();
            $oeuvreMenu = Oeuvre::inRandomOrder()->first();

            $view->with('actualiteMenu', $actualiteMenu);
            $view->with('categoriesMenu', $categoriesMenu);
            $view->with('collectionsMenu', $collectionsMenu);
            $view->with('oeuvreMenu', $oeuvreMenu);
        });
    }
}
