<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAlumnoCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumno_carrera', function (Blueprint $table) {
            //
            $table->bigInteger('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')
                    ->references('id')->on('alumno')
                    ->onDelete('cascade');

            $table->bigInteger('id_carrera')->unsigned()->nullable();
            $table->foreign('id_carrera')
                    ->references('id')->on('carrera')
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
        Schema::table('alumno_carrera', function (Blueprint $table) {
            //
        });
    }
}
