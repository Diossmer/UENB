<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnRepresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumn_repres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('representante_id')->unsigned();
            $table->unsignedBigInteger('alumno_id')->unsigned();
            $table->foreign('representante_id')->references('id')->on('representantes')->onDelete('cascade');
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumn_repres');
    }
}
