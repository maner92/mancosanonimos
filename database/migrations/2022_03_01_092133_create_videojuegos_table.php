<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('videojuego');
            $table->string('categoria');
            $table->string('plataforma');
            $table->string('clasificacion');
            $table->float('precio');
            $table->string('descripcion');
            $table->string('imagen')->nullable();
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
}
