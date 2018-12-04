<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltasdetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altasdetalles', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('inventariables_id')->unsigned(); //
            $table->foreign('inventariables_id')->references('id')->on('movimientos')->onDelete('cascade');

            $table->integer('movimientos_id')->unsigned()->default(1); // 1 = Alta | 2 = Baja | 3 = Traslado
            $table->foreign('movimientos_id')->references('id')->on('movimientos')->onDelete('cascade');

            $table->date('fecha');

            $table->string('proveedor');
            $table->string('ordendecompra');
            $table->integer('factura');

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
