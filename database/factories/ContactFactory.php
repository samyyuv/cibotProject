<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
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
      'active' => $this->faker->numberBetween($min = 0, $max = 1),
      'created_at' => $this->faker->dateTimeBetween('-2 week', 'yesterday'),
    ];
  }
}
