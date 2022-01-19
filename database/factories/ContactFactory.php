<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => $this->faker->name(),
      'email' => $this->faker->safeEmail(),
      'telephone' => $this->faker->phoneNumber(),
      'active' => $this->faker->numberBetween(0, 1),
      'created_at' => $this->faker->dateTimeBetween('-2 week', 'yesterday'),
    ];
  }
}
