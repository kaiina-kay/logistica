<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('modelo');
            $table->string('marca');
            $table->string('tipo');
            $table->Integer('renavam');
            $table->date('ano');
            $table->string('cor');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedInteger('entregador_id');	
            $table->foreign('entregador_id')->references('id')->on('entregadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
