<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Backpack\NewsCRUD\app\Models\Article;
use Backpack\NewsCRUD\app\Models\Category;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for ($i = 0; $i < 30; $i++)
		{

	        $category = Category::orderBy(DB::raw('RAND()'))->first();

	        $article = Article::create([
				'title' => $faker->sentence(), 
				'content' => $faker->text(), 
				'image' => $faker->imageURL(1900,600),
				'status' => $faker->randomElement(array('PUBLISHED','PUBLISHED','DRAFT')),
				'category_id' => $category->id, 
				'featured' => $faker->randomElement(array(true,false)),
				'date' => $faker->dateTimeThisYear(),
	        	]);
		}
        
    }
}
