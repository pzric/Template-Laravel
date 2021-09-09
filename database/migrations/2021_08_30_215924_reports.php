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
        $table->string('payment_country');
        $table->string('currency');
        $table->string('amount');
        $table->string('dollar_amount')->nullable();
        $table->string('accrual');
        $table->string('project');
        $table->string('cost');
        $table->string('description');
        $table->string('state')->nullable();
        $table->string('username');
        $table->string('user_area');
        $table->string('countries[]');
        $table->rememberToken()->nullable();
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
