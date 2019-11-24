<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('services')->insert([
	    'name' => 'painting',
	    'user_id' => 1,
	]);
	DB::table('services')->insert([
	    'name' => 'straightening',
	    'user_id' => 1,
	]);
	DB::table('services')->insert([
	    'name' => 'body parts replacement',
	    'user_id' => 2,
	]);
	DB::table('services')->insert([
	    'name' => 'car air conditioner repair',
	    'user_id' => 2,
	]);
	DB::table('services')->insert([
	    'name' => 'car air conditioner installation',
	    'user_id' => 1,
	]);
    }
}
