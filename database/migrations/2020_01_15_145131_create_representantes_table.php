<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personas_id')->unsigned();
            $table->string('trabajo');
            $table->string('gradoInstruccion');
            $table->string('profOcupacion');
            $table->text('lgTrabajo');
            $table->string('telefonos');
            $table->foreign('personas_id')->references('personas')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('representantes');
    }
}
