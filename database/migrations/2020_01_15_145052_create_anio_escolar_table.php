<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnioEscolarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anioEscolar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personas_id')->unsigned();
            $table->string('grado');
            $table->string('seccion');
            $table->date('fechaIngreso');
            $table->date('fechaEngreso');
            $table->string('estatus');
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('anioEscolar');
    }
}
