<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPlanEstudiosAsignaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plan_estudios_asignatura', function (Blueprint $table) {
            //
            $table->bigInteger('id_plan_estudios');
            $table->foreign('id_plan_estudios')
                    ->references('id')->on('plan_estudios')
                    ->onDelete('cascade');

            $table->bigInteger('id_asignatura');
            $table->foreign('id_asignatura')
                    ->references('id')->on('asignatura')
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
        Schema::table('plan_estudios_asignatura', function (Blueprint $table) {
            //
        });
    }
}
