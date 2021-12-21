<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'pix',
            'price' => 300,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'benefits' => json_encode(['extra' => 'test']),
            'grade' => 'A'
        ];
    }
}
