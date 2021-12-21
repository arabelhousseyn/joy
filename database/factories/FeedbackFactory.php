<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,20),
            'product_id' => $this->faker->numberBetween(1,20),
            'rating' => $this->faker->numberBetween(0,5),
            'description_rate' => $this->faker->text
        ];
    }
}
