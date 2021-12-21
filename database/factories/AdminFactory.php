<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name,
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'email_verified_at' => $this->faker->dateTime,
            'phone' => $this->faker->phoneNumber,
            'otp' => null,
            'phone_verified_at' => $this->faker->dateTime,
            'is_admin' => true
        ];
    }
}
