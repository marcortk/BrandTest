<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	['name' => 'tag1', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        	['name' => 'tag2', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        	['name' => 'tag3', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        	['name' => 'tag4', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        ]);
    }
}
