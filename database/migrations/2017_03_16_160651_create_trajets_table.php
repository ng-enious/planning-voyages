<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->increments('id');
          $table->string('depart');
            $table->string('arrive');
            $table->string('user_id');
          $table->string('avitrajet_id');
            $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('avitrajet_id')->references('id')->on('avitrajets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajets');
    }
}
