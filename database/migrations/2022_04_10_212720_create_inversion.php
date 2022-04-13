<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInversion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversion', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idUser');
            $table->integer('valInversion');
            $table->decimal('rentabilidad');
            $table->integer('numEstado');
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
        Schema::dropIfExists('inversion');
    }
}
