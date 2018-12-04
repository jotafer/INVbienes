<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajasdetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajasdetalles', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('movimiento_id')->unsigned()->default(2); // 1 = Alta | 2 = Baja | 3 = Traslado
            $table->foreign('movimieneto_id')->references('id')->on('movimientos')->onDelete('cascade');
            $table->smallInteger('condicion')->default(1);

            $table->date('fecha');

            $table->string('direccion');
            $table->string('unidad');

            //Codigo Asignado
            $table->string('grupo_id');
            $table->string('subgrupo_id');
            $table->string('especie');
            $table->string('destino');
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')->onDelete('cascade');

            $table->integer('cantidad');
            $table->string('descripcionbien');

            $table->integer('preciounitario');

            $table->string('observaciones')->nullable();
            
           
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
