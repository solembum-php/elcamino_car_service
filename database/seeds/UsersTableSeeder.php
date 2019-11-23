<?php

use Illuminate\Database\Seeder;

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
	    'name' => 'qwe',
	    'email' => 'qwe@gmail.com',
	    'password' => bcrypt('123123'),
	]);
	DB::table('users')->insert([
	    'name' => 'asd',
	    'email' => 'asd@gmail.com',
	    'password' => bcrypt('123123'),
	]);
	DB::table('users')->insert([
	    'name' => 'zxc',
	    'email' => 'zxc@gmail.com',
	    'password' => bcrypt('123123'),
	]);
    }
}
