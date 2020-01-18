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
            $table->unsignedBigInteger('alumno_id')->unsigned();
            $table->string('nombres');
            $table->string('segNombres');
            $table->string('apellidos');
            $table->string('segApellidos');
            $table->date('fNacimiento');
            $table->string('email');
            $table->string('trabajo');
            $table->string('gradoInstruccion');
            $table->string('profOcupacion');
            $table->text('lgTrabajo');
            $table->string('telefonos');
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
        Schema::dropIfExists('representantes');
    }
}
