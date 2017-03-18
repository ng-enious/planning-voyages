<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoyenTransport1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('moyens_transport', function (Blueprint $table) {
            $table->increments('id');
          $table->string('type');
            $table->integer('user_id')->unsigned()->nullable();;
            $table->integer('trajet_id')->unsigned()->nullable();;
           $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('trajet_id')->references('id')->on('trajets')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moyens_transport');
    }
}
