<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCoordinadorDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coordinador_docente', function (Blueprint $table) {
            //
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
        Schema::table('coordinador_docente', function (Blueprint $table) {
            //
        });
    }
}
