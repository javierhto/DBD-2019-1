<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCoordinacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinacion', function (Blueprint $table) {
            //
            $table->bigInteger('id_asignatura')->unsigned()->nullable();
            $table->foreign('id_asignatura')
                    ->references('id')->on('asignatura')
                    ->onDelete('cascade');

            $table->bigInteger('id_profesor')->unsigned()->nullable();
            $table->foreign('id_profesor')
                    ->references('id')->on('profesor')
                    ->onDelete('cascade');

            $table->bigInteger('id_alumno')->unsigned()->nullable();
            $table->foreign('id_alumno')
                    ->references('id')->on('alumno')
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
        Schema::table('coordinacion', function (Blueprint $table) {
            //
        });
    }
}
