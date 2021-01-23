<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasPertenenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas_pertenencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visitas_id');
            $table->foreign('visitas_id')->references('id')->on('visitas');
            $table->unsignedBigInteger('pretenencias_permitidas_id');
            $table->foreign('pretenencias_permitidas_id')->references('id')->on('pretenencias_permitidas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas_pertenencias');
    }
}
