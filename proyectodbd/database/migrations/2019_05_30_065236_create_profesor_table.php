<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('fecha_nacimiento');
            $table->string('nombre');
            $table->string('email');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('password');
            $table->string('jornada');
            $table->string('situacion');
            $table->date('fecha_ingreso');
            $table->string('estado_cuenta');
            $table->string('grado_academico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor');
    }
}
