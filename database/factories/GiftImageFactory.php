<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GiftImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gift_id' => $this->faker->numberBetween(1,10),
            'path' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-gift-cards-2021-1637270343.jpg?crop=1.00xw:0.652xh;0,0.160xh&resize=980:*'
        ];
    }
}
