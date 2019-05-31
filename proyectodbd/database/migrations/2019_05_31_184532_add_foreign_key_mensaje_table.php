<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyMensajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensaje', function (Blueprint $table) {
            //
            
            $table->bigInteger('id_alumno');
            $table->foreign('id_alumno')
                    ->references('id')->on('alumno')
                    ->onDelete('cascade');

            $table->bigInteger('id_profesor');
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
        Schema::table('mensaje', function (Blueprint $table) {
            //
        });
    }
}
