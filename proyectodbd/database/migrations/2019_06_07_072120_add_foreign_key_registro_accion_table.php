<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRegistroAccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_accion', function (Blueprint $table) {
        
            $table->bigInteger('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')
                    ->references('id')->on('alumno')
                    ->onDelete('cascade');
            
            $table->bigInteger('id_profesor')->unsigned()->nullable();
            $table->foreign('id_profesor')
                    ->references('id')->on('profesor')
                    ->onDelete('cascade');

            $table->bigInteger('id_coordinador_docente')->unsigned()->nullable();
            $table->foreign('id_coordinador_docente')
                    ->references('id')->on('coordinador_docente')
                    ->onDelete('cascade');

            $table->bigInteger('id_administrador')->unsigned()->nullable();
            $table->foreign('id_administrador')
                    ->references('id')->on('administrador_general')
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
        //
    }
}
