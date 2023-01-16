<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $faker;

    public function run()
    {
        $faker = Faker::create();
        for($i=1; $i<=11; $i++) {
            $fname = $faker->firstName();
            $lname = $faker->lastName();
            $created_at = $faker->dateTimeBetween('-1 year', 'now');

            DB::table('users')->insert([
                'id'=>$i,
                'role' => 'user',
                'name' => $fname,
                'surname' => $lname,
                'user_name' => $lname . '_' . $fname,
                'email' => $faker->email(),
                'password' => 'password',
                'image' => 'prueba.png',
                'created_at'=>$created_at,
                'updated_at'=> $faker->dateTimeBetween($created_at, 'now')
            ]);
        }
    }
}
