<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * $this->call(SubgruposTableSeeder::class);﻿
     *
     * @return void
     */
    public function run()
    {
        DB::table('movimientos')->insert([
            'nombre' => 'alta',
        ]);

       DB::table('movimientos')->insert([
            'nombre' => 'baja',
        ]);

       DB::table('movimientos')->insert([
            'nombre' => 'traslado',
        ]);
        
    }
}
