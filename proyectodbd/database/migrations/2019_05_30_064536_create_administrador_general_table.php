<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador_general', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('email');
            $table->string('direccion');
            $table->integer('celular');
            $table->string('password');
            $table->string('jornada');
            $table->string('situacion');
            $table->date('fecha_ingreso');
            
            $table->bigInteger('id_comuna')->unsigned()->nullable();
            $table->foreign('id_comuna')
                    ->references('id')->on('comuna')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrador_general');
    }
}
