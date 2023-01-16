<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory()->count(1)->create();
    }


        //$faker = Faker::create();
        //for($i=1; $i<=11; $i++) {
          //  $fname = $faker->firstName();
            //$lname = $faker->lastName();
            //$created_at = $faker->dateTimeBetween('-1 year', 'now');

           // DB::table('images')->insert([
             //   'id'=>$i,
               // 'user_id' => User::all('id')->random()->id,
               // 'image_path' => 'prueba.png',
               // 'description' => 'password',
               // 'created_at'=>$created_at,
               // 'updated_at'=> $faker->dateTimeBetween($created_at, 'now')
           // ]);
       // }

}
