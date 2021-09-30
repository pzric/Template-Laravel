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
          $table->string('email');
          $table->string('rol');
          $table->string('area');
          $table->string('start_date');
          $table->string('end_date');
          $table->string('toggle')->nullable();
          $table->string('country_origin')->nullable();
          $table->string('code');
          $table->string('password');
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
