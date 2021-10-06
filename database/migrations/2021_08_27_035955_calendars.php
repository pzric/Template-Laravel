<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Calendars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('calendars',function(Blueprint $table){
        $table->id();
        $table->string('mounth1')->nullable();
        $table->string('mounth2')->nullable();
        $table->string('mounth3')->nullable();
        $table->string('mounth4')->nullable();
        $table->string('mounth5')->nullable();
        $table->string('mounth6')->nullable();
        $table->string('mounth7')->nullable();
        $table->string('mounth8')->nullable();
        $table->string('mounth9')->nullable();
        $table->string('mounth10')->nullable();
        $table->string('mounth11')->nullable();
        $table->string('mounth12')->nullable();
        $table->string('total');
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
        Schema::dropIfExists('calendars');
    }
}
