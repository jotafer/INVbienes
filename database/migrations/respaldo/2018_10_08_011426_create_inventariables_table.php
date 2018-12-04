<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventariables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');

            $table->integer('movimientos_id')->default(1); // 1 = Alta | 2 = Baja | 3 = Traslado
            $table->foreign('movimientos_id')->references('id')->on('movimientos')->onDelete('cascade');

            //Codigo Asignado
            $table->string('grupo_id');
            $table->string('subgrupo_id');
            $table->string('especie_id');
                        //Destino
            $table->integer('ubicacion_id');


            //Detalles de Alta de bienes
            $table->string('proveedor');
            $table->string('ordendecompra');
            $table->string('factura');
            $table->string('fecha');
            $table->string('precio unitario');

        
            //Relación para listar en grupo de especies
            $table->integer('altaesp_id')->unsigned();
            $table->foreign('altaesp_id')->references('id')->on('altaesps');



            //Descripcion bien
            $table->string('descripcionbien');
            $table->integer('costo_incorporacion');
            $table->smallInteger('estado_conservacion'); // 0 = Bueno | 1 = Regular | 2 = Malo 
    
          
            $table->softDeletes();  
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   
}
