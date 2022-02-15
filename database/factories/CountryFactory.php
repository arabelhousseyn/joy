<?php

namespace Database\Factories;

use App\Models\Country;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Algeria',
            'flag' => 'dz',
            'alpha_2_code' => 'dz'
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Country $country){
            $country->provinces()->create([
                'code' =>'01',
                'name' => 'adrar'
            ]);
        });
    }
}
