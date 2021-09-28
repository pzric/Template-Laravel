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
        $table->string('mounth1');
        $table->string('mounth2');
        $table->string('mounth3');
        $table->string('mounth4');
        $table->string('mounth5');
        $table->string('mounth6');
        $table->string('mounth7');
        $table->string('mounth8');
        $table->string('mounth9');
        $table->string('mounth10');
        $table->string('mounth11');
        $table->string('mounth12');
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
