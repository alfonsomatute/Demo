<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Backpack\NewsCRUD\app\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for ($i = 0; $i < 20; $i++)
		{
		  $tag = Tag::create([
		    'name' => $faker->word,		    
		  ]);
		}
    }
}
