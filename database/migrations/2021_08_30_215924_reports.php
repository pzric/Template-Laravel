<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reports', function(Blueprint $table){
        $table->id();
        $table->string('date');
        $table->string('coin');
        $table->string('id_country');
        $table->string('currency');
        $table->string('number1');
        $table->string('number2');
        $table->string('id_countryb');
        $table->string('id_concept');
        $table->string('concep');
        $table->string('description');
        $table->string('cost');
        $table->string('calendar');
        $table->string('project');
        $table->string('name_beneficted');
        $table->string('user_area');
        $table->unsignedBigInteger('calendar_id');
        $table->foreign('calendar_id')->references('id')->on('calendars')->onDelete('cascade');
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
        Schema::dropIfExists('reports');
    }
}
