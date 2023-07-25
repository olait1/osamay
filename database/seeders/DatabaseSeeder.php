<?php

namespace Database\Seeders;

use App\Models\about_us;
use App\Models\category;
use App\Models\courses;
use App\Models\listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        listing::factory(20)->create();
        about_us::create([
            "heading"=>"Innovative Way To Learn",
            "paragraph"=>"Aliquyam accusam clita nonumy ipsum
             sit sea clita ipsum clita, ipsum dolores amet voluptua
              duo dolores et sit ipsum rebum, sadipscing et erat eirmod 
              diam kasd labore clita est. Diam sanctus gubergren sit rebum 
              clita amet, sea est sea vero sed et. Sadipscing labore tempor 
              at sit dolor clita consetetur diam. Diam ut diam tempor no et, 
              lorem dolore invidunt no nonumy stet ea labore, dolor justo et
               sit gubergren diam sed sed no ipsum. 
            Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet",
            "image"=>"img/about.jpg"
        ]);
        category::factory(20)->create();
        courses::factory(200)->create();
    }
    
}
