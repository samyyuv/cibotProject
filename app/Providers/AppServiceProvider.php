<?php

namespace App\Providers;

use App\Models\Oeuvre;
use App\Models\Actualite;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Support\Str;
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
            $slugedNames = $this->sluging($categoriesMenu);

            $view->with('actualiteMenu', $actualiteMenu);
            $view->with('categoriesMenu', $categoriesMenu);
            $view->with('collectionsMenu', $collectionsMenu);
            $view->with('oeuvreMenu', $oeuvreMenu);
            $view->with('slugedNames', $slugedNames);
        });
    }
    private function sluging($categoriesMenu)
    {
        $slugs = [];

        foreach ($categoriesMenu as $categorie) {
            $slugs[$categorie->id] = Str::slug($categorie->titre);
        }

        return $slugs;
    }
}
