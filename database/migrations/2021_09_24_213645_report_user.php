<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReportUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('report_user',function(Blueprint $table){
        $table->id();

        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('report_id');

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');
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
        Schema::dropIfExists('report_user');
    }
}
