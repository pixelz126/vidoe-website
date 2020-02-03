<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tag;

class Tags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
        	$array = [
     		'name' => $faker->word,
             ];
             
             Tag::create($array);
        }
    }
}
