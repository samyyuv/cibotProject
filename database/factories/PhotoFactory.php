<?php

namespace Database\Factories;

use App\Models\Oeuvre;
use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'yesterday'),
            'collection_id' => Collection::inRandomOrder()->first()->id,
            'categorie_id' => Categorie::inRandomOrder()->first()->id,
            'oeuvre_id' => Oeuvre::inRandomOrder()->first()->id,
        ];
    }
}
