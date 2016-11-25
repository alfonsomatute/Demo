<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $this->truncateTables(array(
                'categories',
                'tags',
                'articles'
            )
        );

        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        $this->checkForeignKeys(false);
        
        foreach($tables as $table)
        {
            DB::table($table)->truncate();
        }
        
        $this->checkForeignKeys(false);
    }

    public function checkForeignKeys($check)
    {
        $check = $check ? 1 : 0;
        
        DB::statement('SET FOREIGN_KEY_CHECKS = '.$check);
    }
}
