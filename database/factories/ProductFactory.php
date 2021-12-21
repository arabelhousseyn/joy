<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,10),
            'brand_id' => null,
            'product_number' => $this->faker->numberBetween(),
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'price' => 300,
            'accepted_at' => $this->faker->dateTime
        ];
    }
}
