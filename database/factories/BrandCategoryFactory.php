<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => 1,
            'category_id' => 1
        ];
    }
}
