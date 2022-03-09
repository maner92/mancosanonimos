<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provedor');
            $table->timestamps();
        });

    Schema::table('videojuegos', function(Blueprint $table){
        $table->unsignedBigInteger('provedor_id')->nullable()->after('id');
        
        $table->foreign('provedor_id')->references('id')->on('provedores');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provedores');
    }
}
