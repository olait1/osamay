<?php

namespace Database\Seeders;
use App\Models\pendingFee;
use App\Models\listing;
use App\Models\performance;
use App\Models\event;
use App\Models\activities;
use App\Models\questions;
use App\Models\attempted;
use App\Models\subject;
use Hash;
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
        \App\Models\User::factory()->create(
            [
                'name'=>"Admin",
                'user'=>0,
                'gender'=>'male',
                'passport'=>' ',
                'password'=>Hash::make('admins'),
                'email'=>'info@osamay.com.ng'
            ]
        );
        // listing::factory(20)->create();
        // pendingFee::factory(10)->create();
        event::factory(5)->create();
        // performance::factory(5)->create();

    //    activities::factory(5)->create();

    }

}
