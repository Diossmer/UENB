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
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('representante_id');
            $table->string('camisas');
            $table->string('pantalon');
            $table->string('zapatos');
            $table->string('enfemPadecida');
            $table->string('enfemPsicologica');
            $table->foreign('persona_id')->references('personas')->on('id')->onDelete('cascade');
            $table->foreign('representante_id')->references('representantes')->on('id')->onDelete('cascade');
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
