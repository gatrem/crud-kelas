<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$faker = Factory::create(); //import library faker
        $limit = 5; //batasan berapa banyak data
        for ($i = 0; $i < $limit; $i++) {
            DB::table('teachers')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'nip' => $faker->randomNumber(9),
                'address' => $faker->address,
            ]);
        }
    }
}
