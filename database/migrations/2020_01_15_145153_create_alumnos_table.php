<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personas_id')->unsigned();
            $table->unsignedBigInteger('representantes_id')->unsigned();
            $table->string('camisas');
            $table->string('pantalon');
            $table->string('zapatos');
            $table->string('enfemPadecida');
            $table->string('enfemPsicologica');
            $table->foreign('personas_id')->references('personas')->on('id')->onDelete('cascade');
            $table->foreign('representantes_id')->references('representantes')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('alumnos');
    }
}
