<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name' => 'Marco Rodriguez', 'email'=>'marco.rodriguez@tektonlabs.com', 'password' => bcrypt('secret'), 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        ]);
    }
}