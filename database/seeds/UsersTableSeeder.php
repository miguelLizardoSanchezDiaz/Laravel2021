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
        factory(App\User::class)->create([
        	'name'=>"MIGUEL LIZARDO",
        	'email' => "miguelsanchez261092@gmail.com",
        	'password' => bcrypt('admin2021.rar')
        ]);
    }
}
