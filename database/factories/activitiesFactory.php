<?php

namespace Database\Factories;

use App\Models\activities;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ActivitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = activities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // other attributes...
            's_code' => "sc-0000",
            'instruction'=>$this->faker->sentence(),
            'duration'=>20,
            'due_date'=>$this->faker->date()
          
        ];
    }
}
