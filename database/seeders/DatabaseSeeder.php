<?php

namespace Database\Seeders;

use App\Models\Actualite;
use App\Models\Photo;
use App\Models\Categorie;
use App\Models\Collection;
use App\Models\Oeuvre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Actualite::factory(5)->create();
        $categorie = Categorie::factory(5)->create();
        $oeuvre = DB::table('oeuvres');

        Collection::factory(20)->create()->each(function ($collection) use ($oeuvre, $categorie) {
            Oeuvre::factory(rand(1, 3))->create([
                'collection_id' => $collection->id,
                'categorie_id' => ($categorie->random(1)->first())->id
            ]);
            Photo::factory(rand(1, 3))->create([
                'oeuvre_id' => $oeuvre->inRandomOrder()->first()->id,
            ]);
        });
    }
}
