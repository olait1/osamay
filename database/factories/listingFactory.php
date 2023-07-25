<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class listingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'department' => $this->faker->sentence(),
            'age' => $this->faker->numberBetween(1,100),
            'gender' => 'male' or 'female'
        ];
    }
}
