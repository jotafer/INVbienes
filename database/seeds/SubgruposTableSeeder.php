<?php

use Illuminate\Database\Seeder;
use sisInventario\Subgrupo;

class SubgruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Subgrupos para vehículos

        DB::table('subgrupos')->insert([
            'nombre' => 'Vehiculos Terrestres para Uso Productivo',
            'grupo_id' => 1,
            'codigo' => 1
        ]);

        DB::table('subgrupos')->insert([
            'nombre' => 'Vehiculos Terrestres para uso administrativo',
            'grupo_id' => 1,
            'codigo' => 2
        ]);


        //Subgrupos para maquinas y equipos

        DB::table('subgrupos')->insert([
            'nombre' => 'Máquinas de Oficina',
            'grupo_id' => 2,
            'codigo' => 1
        ]);

        DB::table('subgrupos')->insert([
            'nombre' => 'Equipos Computacionales',
            'grupo_id' => 2,
            'codigo' => 2
        ]);

        DB::table('subgrupos')->insert([
            'nombre' => 'Equipos Varios',
            'grupo_id' => 2,
            'codigo' => 3
        ]);

        //Subgrupos para muebles y enseres

        DB::table('subgrupos')->insert([
            'nombre' => 'Muebles de Oficina',
            'grupo_id' => 3,
            'codigo' => 1
        ]);

        DB::table('subgrupos')->insert([
            'nombre' => 'Otros Muebles',
            'grupo_id' => 3,
            'codigo' => 2
        ]);
    }
}
