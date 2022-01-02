<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Type;
use App\Models\Photo;
use App\Models\Artwork;
use App\Models\Collection;
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
        $types = Type::factory(5)->create();
        $artwork = DB::table('artworks');

        Collection::factory(20)->create()->each(function ($collection) use ($artwork, $types) {
            Artwork::factory(rand(1, 3))->create([
                'collection_id' => $collection->id,
                'type_id' => ($types->random(1)->first())->id
            ]);
            Post::factory(rand(1, 3))->create([
                'collection_id' => $collection->id,
                'artwork_id' => $artwork->inRandomOrder()->first()->id,
            ]);
            Photo::factory(rand(1, 3))->create([
                'artwork_id' => $artwork->inRandomOrder()->first()->id,
            ]);
        });
    }
}
