<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\courses;
use Illuminate\Database\Eloquent\Factories\Factory;

class categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
       
         return (
            
            [
            'name' => $this->faker->name(),
          
            'image'=>"img/cat-1.jpg"
            
        ]);
       
    }
}
