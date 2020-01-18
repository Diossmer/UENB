<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnioEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anio_escolars', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('users_id')->unsigned();
            $table->string('grado');
            $table->string('seccion');
            $table->date('fechaIngreso');
            $table->string('cedula');
            $table->string('matricula');
            //$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('anio_escolars');
    }
}
