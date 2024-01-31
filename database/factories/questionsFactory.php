<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use Faker\Generator as Faker;

$factory->define(App\questions::class, function (Faker $faker) {
    return [

            's_code' => $faker->randomElement([3064, 3064, 2262, 3517, 2811, 3021]),
            'questions' => $this->faker->name(),
            'opt_a'=>$this->faker->name(),
            'opt_b'=>$this->faker->name(),
            'opt_c'=>$this->faker->name(),
            'opt_d'=>$this->faker->name(),

        ];
    });
