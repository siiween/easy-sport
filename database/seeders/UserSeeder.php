<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        $no_of_rows = 50;
        $password = 123123;

        for( $i=0; $i < $no_of_rows; $i++ ){
            DB::table('users')->insert(array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($password),
                'rol' => 'client',
                'age' => $faker->randomNumber(2, true),
            ));
        }
    }
}