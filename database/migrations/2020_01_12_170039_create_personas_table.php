<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('segNombres');
            $table->string('apellidos');
            $table->string('segApellidos');
            $table->string('cedula');
            $table->string('lgNacimiento');
            $table->text('direccion');
            $table->date('fNacimiento');
            $table->string('email');
            $table->enum('roles',['representante','alumno']);
            $table->string('edad');
            $table->string('sexo');
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
        Schema::dropIfExists('personas');
    }
}
