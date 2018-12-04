<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAltaespTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altaesp', function (Blueprint $table) {
            $table->increments('id');

            $table->string('grupo_id');
            $table->string('subgrupo_id');
            $table->string('especie_id');
            $table->string('descripcionespecie');

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
