<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'e_name' => $this->faker->name(),
            'e_img' => $this->faker->image('public/storage/images',640,480, null, false),
            'e_time' => $this->faker->time(),
            'e_date' => $this->faker->date(),
        ];
    }
}
