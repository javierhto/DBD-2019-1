<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_alumno', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('numero_matricula');
            $table->string('nombre');
            $table->string('correo');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('contrasena');
            $table->string('jornada');
            $table->string('situacion');
            $table->integer('ano_ingreso');
            $table->integer('nivel_actual');
            $table->float('avance');
            $table->float('eficiencia');
            $table->integer('asignaturas_aprobadas');
            $table->float('PPA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_alumno');
    }
}
