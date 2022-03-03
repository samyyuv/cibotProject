<?php

namespace Database\Seeders;

use App\Models\Actualite;
use App\Models\Photo;
use App\Models\Categorie;
use App\Models\Collection;
use App\Models\Contact;
use App\Models\Oeuvre;
use App\Models\User;
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
                Actualite::factory(10)->create();
                Collection::factory(10)->create();
                Categorie::factory(5)->create();
                Oeuvre::factory(30)->create();
                Photo::factory(200)->create();
                Contact::factory(2)->create();
                User::factory(1)->create();
        }
}
