<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'size' => '2m x 1m',
            'description' => $this->faker->paragraphs(2, true),
            'date' => $this->faker->dateTimeBetween('-10 years', '+1 week'),
            'description' => $this->faker->paragraphs(2, true),
            'created_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
