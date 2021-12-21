<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserBillingAddressFactory extends Factory
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
            'province_id' => 1,
            'name' => $this->faker->name,
            'street_address' => $this->faker->streetAddress,
            'street_address2' => $this->faker->streetAddress,
            'zip_code' => $this->faker->postcode,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
