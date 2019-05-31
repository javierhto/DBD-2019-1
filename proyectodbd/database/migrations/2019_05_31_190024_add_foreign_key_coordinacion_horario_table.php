<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCoordinacionHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinacion_horario', function (Blueprint $table) {
            //
            $table->bigInteger('id_coordinacion');
            $table->foreign('id_coordinacion')
                    ->references('id')->on('coordinacion')
                    ->onDelete('cascade');

            $table->bigInteger('id_horario');
            $table->foreign('id_horario')
                    ->references('id')->on('horario')
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
        Schema::table('coordinacion_horario', function (Blueprint $table) {
            //
        });
    }
}
