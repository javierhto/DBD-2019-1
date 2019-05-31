<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPlanEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_estudios', function (Blueprint $table) {
            //
            $table->bigInteger('id_carrera');
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
        Schema::table('plan_estudios', function (Blueprint $table) {
            //
        });
    }
}
