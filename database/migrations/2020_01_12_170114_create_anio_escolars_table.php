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
            $table->string('cedula');
            $table->date('fechaIngreso');
            $table->date('fechaEngreso');
            $table->string('grado');
            $table->string('seccion');
            $table->string('estatus');
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
