<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class OeuvreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->words(3, true),
            'sous_titre' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(5, true),
            'created_at' => $this->faker->dateTimeBetween('-2 week', 'yesterday'),
            'date' => $this->faker->dateTimeBetween('-10 years', 'yesterday'),
            'collection_id' => Collection::inRandomOrder()->first()->id,
            'categorie_id' => Categorie::inRandomOrder()->first()->id,
            'active' => $this->faker->numberBetween($min = 0, $max = 1),
        ];
    }
}
