<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visitantes_id');
            $table->foreign('visitantes_id')->references('id')->on('visitantes');
            $table->unsignedBigInteger('tipo_visitantes_id');
            $table->foreign('tipo_visitantes_id')->references('id')->on('tipo_visitantes');
            $table->unsignedBigInteger('solicitante_id');
            $table->foreign('solicitante_id')->references('id')->on('solicitantes');
            $table->unsignedBigInteger('motivo_visitas_id');
            $table->foreign('motivo_visitas_id')->references('id')->on('motivo_visitas');
            $table->unsignedBigInteger('pisos_id');
            $table->foreign('pisos_id')->references('id')->on('pisos');
            $table->unsignedBigInteger('pases_id');
            $table->foreign('pases_id')->references('id')->on('pases');
            $table->unsignedBigInteger('autoriza_id');
            $table->foreign('autoriza_id')->references('id')->on('autoriza');



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
        Schema::dropIfExists('visitas');
    }
}
