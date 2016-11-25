<?php

use Illuminate\Database\Seeder;
use Backpack\NewsCRUD\app\Models\Category;
use Faker\Factory as Faker;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for ($i = 0; $i < 10; $i++)
		{
			$parent = Category::orderBy(DB::raw('RAND()'))->first();

		  $category = Category::create([
		    'name' => $faker->word,
		    'parent_id' => $faker->randomElement(array(null,$parent ? $parent->id : null)),
		  ]);
		}
    }
}
