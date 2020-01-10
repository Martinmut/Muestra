<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //sirve para construir, modificar o borrar estructuras en la base de datos
    public function up()
    {
        Schema::create('pendientes', function (Blueprint $table) {
            $table->bigIncrements('tareaid');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //sirve para hacer todo lo inverso que se hace en el up
    public function down()
    {
        Schema::dropIfExists('pendientes');
    }
}
