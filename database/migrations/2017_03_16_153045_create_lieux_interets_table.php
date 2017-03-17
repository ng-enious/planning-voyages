<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieuxInteretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieux_interets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('type');
            $table->string('addresse')->nullable();
            $table->float('latitude');
            $table->float('langitude');
            $table->string('user_id');
          $table->string('avilieu_id'); 
            $table->timestamps();
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('avilieu_id')->references('id')->on('alieus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lieux_interets');
    }
}
