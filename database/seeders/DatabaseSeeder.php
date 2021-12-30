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
        $artworks = DB::table('artworks');
        $post = DB::table('posts');

        Post::factory(10)->create()->each(function ($post) use ($types) {
            Artwork::factory(rand(1, 3))->create([
                'post_id' => $post->id,
                'type_id' => ($types->random(1)->first())->id
            ]);
        });
        Post::factory(3)->create()->each(function ($post) {
            Collection::factory(rand(1, 3))->create([
                'post_id' => $post->id,
                'artwork_id' => DB::table('artworks')->get()->first()->id
            ]);
        });
        Photo::factory(rand(1, 3))->create([
            'artwork_id' => ($artworks->first())->id,
        ]);
    }
}
