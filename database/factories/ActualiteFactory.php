<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(5, true),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            'created_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
