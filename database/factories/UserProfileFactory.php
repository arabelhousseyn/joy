<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'user_number' => $this->faker->uuid,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'middleName' => $this->faker->name,
            'gender' => 'M',
            'dob' => $this->faker->date,
            'language' => 'EN'
        ];
    }
}
