<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
	    'name' => 'Opel Omega',
	    'user_id' => 1,
	]);
	DB::table('cars')->insert([
	    'name' => 'Daewoo Lanos',
	    'user_id' => 1,
	]);
	DB::table('cars')->insert([
	    'name' => 'Hundai Getz',
	    'user_id' => 1,
	]);
	DB::table('cars')->insert([
	    'name' => 'Opel Omega',
	    'user_id' => 2,
	]);
	DB::table('cars')->insert([
	    'name' => 'Daewoo Lanos',
	    'user_id' => 2,
	]);
    }
}
