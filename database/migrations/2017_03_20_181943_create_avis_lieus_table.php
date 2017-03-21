<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisLieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_lieus', function (Blueprint $table) {
             $table->increments('id');
           $table->integer('note');
           $table->string('commentaire');
           $table->integer('user_id')->unsigned()->nullable();
           $table->integer('lieu_id')->unsigned()->nullable();
           $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('lieu_id')->references('id')->on('lieux')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avis_lieus');
    }
}
