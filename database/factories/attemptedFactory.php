<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

$factory->define(App\attempted::class, function (Faker $faker) {
    return [
        // other attributes...

        's_code' => $faker->randomElement([3064, 3064, 2262, 3517, 2811, 3021]),

         'user_id' => 1,

];
});
