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
            $table->unsignedBigInteger('anioEscolar_id')->unsigned();
            $table->string('fotos');
            $table->string('nombres');
            $table->string('segNombres');
            $table->string('apellidos');
            $table->string('segApellidos');
            $table->string('lgNacimiento');
            $table->text('direccion');
            $table->date('fNacimiento');
            $table->string('email');
            $table->string('edad');
            $table->string('sexo');
            $table->string('camisas');
            $table->string('pantalon');
            $table->string('zapatos');
            $table->string('enfemPadecida');
            $table->string('enfemPsicologica');
            $table->string('estatus');
            $table->foreign('anioEscolar_id')->references('id')->on('anio_escolars')->onDelete('cascade');
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
