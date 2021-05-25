<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table ->string('rut');
            $table->string('name');
            $table->string('direccion')->nullable();
            $table->date('f_nacimiento')->nullable();
            $table->integer('telefono')->nullable();            
            $table->unsignedBigInteger('id_r')->nullable();
            $table->foreign('id_r')->references('id_r')->on('rols');
            $table->unsignedBigInteger('id_p')->nullable();
            $table->foreign('id_p')->references('id_p')->on('prevision');
            $table->unsignedBigInteger('id_e')->nullable();
            $table->foreign('id_e')->references('id_e')->on('especialidad');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
