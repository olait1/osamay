<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class performanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'user_id'=>1,
            'subject'=>$this->faker->sentence(1),
            'ca'=>$this->faker->numberBetween(1,40),
            'exam'=>$this->faker->numberBetween(1,60),
            'first_term'=>$this->faker->numberBetween(1,20),
            'second_term'=>$this->faker->numberBetween(1,20),
            'third_term'=> $this->faker->numberBetween(1,20),
            'session_avg'=>$this->faker->numberBetween(1,100),
            'subject_position'=>$this->faker->numberBetween(1,40),
            'grade_remark'=> $this->faker->numberBetween(1,20),
            'class_avg'=>$this->faker->numberBetween(1,100),


        ];
    }
}
