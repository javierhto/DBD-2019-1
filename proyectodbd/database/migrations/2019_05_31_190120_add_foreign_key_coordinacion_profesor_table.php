<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCoordinacionProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinacion_profesor', function (Blueprint $table) {
            //
            $table->bigInteger('id_coordinacion')->unsigned()->nullable();
            $table->foreign('id_coordinacion')
                    ->references('id')->on('coordinacion')
                    ->onDelete('cascade');

            $table->bigInteger('id_profesor')->unsigned()->nullable();
            $table->foreign('id_profesor')
                    ->references('id')->on('profesor')
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
        Schema::table('coordinacion_profesor', function (Blueprint $table) {
            //
        });
    }
}
