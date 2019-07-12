<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('No_Eco')->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('No_Serie_Motor');
            $table->string('Capacidad');
            $table->string('Imgn')->nullable();
            $table->string('Tipo_Motor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
