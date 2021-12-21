<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestOpenBrandFactory extends Factory
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
            'plan_id' => 1,
            'request_number' => $this->faker->numberBetween(),
            'name' => $this->faker->name,
            'name_plan' => 'pix',
            'price_plan' => 300,
            'grade' => 'A',
            'months' => '12',
            'logo' => 'https://cdn.shopify.com/shopifycloud/hatchful_web_two/bundles/4a14e7b2de7f6eaf5a6c98cb8c00b8de.png',
            'commercial_document' => 'https://books.google.dz/books?id=NYUvCwAAQBAJ&pg=PA17&dq=toast&hl=en&sa=X&ved=2ahUKEwinltW90vT0AhUbgf0HHXVZA7wQ6AF6BAgLEAI#v=onepage&q=toast&f=false',
            'area' => 'https://cdn.geekwire.com/wp-content/uploads/2020/02/amzngo1-768x512.jpeg',
            'status' => 'W'
        ];
    }
}
