<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Specifics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('specifics',function(Blueprint $table){
        $table->id();
        $table->unsignedBigInteger('Pais');
        $table->foreign('Pais')->references('id')->on('countries');
        $table->string('Area');
        $table->string('Indice');
        $table->string('Concepto_global');
        $table->string('TBCode');
        $table->string('Cuenta');
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
        Schema::dropIfExists('specifics');
    }
}
