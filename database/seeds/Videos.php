<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Video;

class Videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $images = [
        	
        	'videos-two-third.jpg',
        	'1565131936yfVr1nQ304.jpg'
        ];

        $youtube = [
        	'https://www.youtube.com/watch?v=OZK27hsCcDo',
        	'https://www.youtube.com/watch?v=HucxxbKX7t0',
        	'https://www.youtube.com/watch?v=TCgV2YzU1GM',
        	'https://www.youtube.com/watch?v=ZUtgrmDi69M'
        ];

        $ids = [1,2,3,4,5,6,7,8,9];

        for ($i=0; $i < 10; $i++) { 
        	$array = [
     		'name' => $faker->word,
     		'meta_keywords' => $faker->name,
     		'meta_desc' => $faker->name,
     		'cat_id' => 1,
     		'youtube' => $youtube[rand(0,3)],
     		'published' => rand(0,1),
     		'image' => $images[rand(0,1)],
     		'desc' => '$faker->paragraph',
     		'user_id' => 1,
             ];
             
             $video = Video::create($array);
             $video->skills()->sync(array_rand($ids , 2));
             $video->tags()->sync(array_rand($ids , 3));
        }
    }
}
