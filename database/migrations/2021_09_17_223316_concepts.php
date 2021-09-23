<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Concepts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts',function(Blueprint $table){
          $table->id();
          $table->string('country');
          $table->string('account');
          $table->string('specific_concept');
          $table->string('global_concept');
          $table->string('TBCode');
          $table->string('indice');
          $table->string('area');
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
        Schema::dropIfExists('concepts');
    }
}
