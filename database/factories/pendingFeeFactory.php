<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pendingFeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'description'=>$this->faker->sentence(),
            'term'=>$this->faker->name(),
            'session'=>$this->faker->year(),
            'amount'=>$this->faker->numberBetween(2000,7000)

        ];
    }
}
