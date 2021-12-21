<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_gift' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(100,300),
            'points' => $this->faker->numberBetween(200,500)
        ];
    }
}
