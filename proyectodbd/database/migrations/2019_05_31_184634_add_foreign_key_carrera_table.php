<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrera', function (Blueprint $table) {
            //
            $table->bigInteger('id_departamento');
            $table->foreign('id_departamento')
                    ->references('id')->on('departamento')
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
        Schema::table('carrera', function (Blueprint $table) {
            //
        });
    }
}
