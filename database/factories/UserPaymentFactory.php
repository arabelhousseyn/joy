<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserPaymentFactory extends Factory
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
            'card_name' => $this->faker->userName,
            'card_number' => $this->faker->creditCardNumber,
            'exp_month' => $this->faker->month,
            'exp_year' => $this->faker->year(),
            'cvv' => $this->faker->numberBetween(100,200),
            'card_type' => $this->faker->creditCardType
        ];
    }
}
