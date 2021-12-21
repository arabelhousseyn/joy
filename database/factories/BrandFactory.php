<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
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
            'brand_number' => $this->faker->numberBetween(),
            'name' => 'HowEver',
            'logo' => 'https://cdn.shopify.com/shopifycloud/hatchful_web_two/bundles/4a14e7b2de7f6eaf5a6c98cb8c00b8de.png',
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'lat' => 36.7783,
            'long' => 119.4179,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'expire_at' => $this->faker->date('2022-02-12')
        ];
    }
}
