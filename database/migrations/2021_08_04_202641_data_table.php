<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
          $table->id();
          $table->string('name');
          $table->string('password');
          $table->string('email')->unique();
          $table->string('position');
          $table->string('area_code');
          $table->string('country');
          $table->string('country_origin');
          $table->string('currency');
          $table->string('status');
          $table->string('start_date');
          $table->string('cod_manager');
          $table->string('email_manager');
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
        Schema::dropIfExists('users');
    }
}
