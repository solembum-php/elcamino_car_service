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
	    'service_id' => 13,
	]);
	DB::table('cars')->insert([
	    'name' => 'Daewoo Lanos',
	    'service_id' => 13,
	]);
	DB::table('cars')->insert([
	    'name' => 'Hundai Getz',
	    'service_id' => 22,
	]);
	DB::table('cars')->insert([
	    'name' => 'Opel Omega',
	    'service_id' => 22,
	]);
	DB::table('cars')->insert([
	    'name' => 'Daewoo Lanos',
	    'service_id' => 25,
	]);
    }
}
