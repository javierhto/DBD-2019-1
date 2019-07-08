<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinadorDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinador_docente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('email');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('password');
            $table->string('jornada');
            $table->string('situacion');
            $table->date('fecha_ingreso');
            $table->string('estado_cuenta');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordinador_docente');
    }
}
