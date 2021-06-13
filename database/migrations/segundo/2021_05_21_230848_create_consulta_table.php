<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->id();
            $table->string('patologia')->nullable();
            $table->time('hora');
            $table->date('fecha');
            $table->string('box');
            $table->integer('valor');
            $table->integer('pagado');
            $table->string('asistencia')->nullable();
            $table->unsignedBigInteger('id_u');
            $table->unsignedBigInteger('id_u_r');
            $table->foreign('id_u_r')->references('id')->on('users');
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
        Schema::dropIfExists('consulta');
    }
}
