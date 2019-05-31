<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyHistorialProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historial_profesor', function (Blueprint $table) {
            //
            $table->bigInteger('id_profesor');
            $table->foreign('id_profesor')
                    ->references('id')->on('profesor')
                    ->onDelete('cascade');

            $table->bigInteger('id_asignatura');
            $table->foreign('id_asignatura')
                    ->references('id')->on('asignatura')
                    ->onDelete('cascade');

            $table->bigInteger('id_coordinacion');
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
        Schema::table('historial_profesor', function (Blueprint $table) {
            //
        });
    }
}
