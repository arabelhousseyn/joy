<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestOpenBrandPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'request_open_brand_id' => 1,
            'payment_number' => $this->faker->numberBetween(),
            'type' => 'N',
            'receipt' => null,
            'card_name' => $this->faker->name,
            'card_number' => $this->faker->creditCardNumber,
            'exp_month' => $this->faker->month,
            'exp_year' => $this->faker->year,
            'cvv' => $this->faker->numberBetween(100,200),
            'card_type' => $this->faker->creditCardType
        ];
    }
}
