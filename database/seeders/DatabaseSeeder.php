<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Import DB and Faker services\
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
        foreach (range(1,500) as $index) {
            DB::table('employees')->insert([
                    'firstname' => $faker->firstname,
                    'lastname' => $faker -> lastname,
                    'email' => $faker -> email,
                    'dob' => $faker -> date($format = 'D-m-y', $max = '2010', $min = '1980')
                ]
            );
        }
    }
}
