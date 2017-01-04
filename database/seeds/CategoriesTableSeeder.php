<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Football', 'slug' => 'Footbal', 'description' => 'lalalallalala', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        	['name' => 'Basketball', 'slug' => 'Basketball', 'description' => 'lalalallalala', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        	['name' => 'Box', 'slug' => 'Box', 'description' => 'lalalallalala', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        ]);
    }
}
