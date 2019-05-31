<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alumno', function (Blueprint $table) {
            //
            $table->bigInteger('id_carrera');
            $table->foreign('id_carrera')
                    ->references('id')->on('carrera')
                    ->onDelete('cascade');
            
            $table->bigInteger('id_comuna');
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
        Schema::table('alumno', function (Blueprint $table) {
            //
        });
    }
}