<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyHistorialAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historial_alumno', function (Blueprint $table) {
            //
            $table->bigInteger('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')
                    ->references('id')->on('alumno')
                    ->onDelete('cascade');
            
            $table->bigInteger('id_coordinacion')->unsigned()->nullable();
            $table->foreign('id_coordinacion')
                    ->references('id')->on('coordinacion')
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
        Schema::table('historial_alumno', function (Blueprint $table) {
            //
        });
    }
}
