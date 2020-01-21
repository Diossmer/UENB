<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->string('grado');
            $table->string('cuposdisponible');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('periodo_id');
            $table->foreign('docente_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('periodo_id')->references('id')->on('periodo_escolars')->onDelete('cascade');
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
        Schema::dropIfExists('seccions');
    }
}
