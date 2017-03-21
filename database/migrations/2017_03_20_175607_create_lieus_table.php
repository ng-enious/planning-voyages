<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieus', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nom');
            $table->string('type');
            $table->string('addresse')->nullable();
            $table->float('latitude');
            $table->float('langitude');
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                      });
}
                     
 public function down()
    {
        Schema::dropIfExists('lieus');
    }
}