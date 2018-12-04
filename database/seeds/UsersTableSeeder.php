<?php

use Illuminate\Database\Seeder;
use sisInventario/User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        User::create([
        	'name' => 'AminJuan',
        	'email' => 'adminjuan@gmail.com',
        	'password' => bcrypt('123123'),
        	'role' => 0
        ]);

        //Usuario
         User::create([
        	'name' => 'UsuariaMaria',
        	'email' => 'usuariamaria@gmail.com',
        	'password' => bcrypt('123123'),
        	'role' => 0
        ]);

    }
}
