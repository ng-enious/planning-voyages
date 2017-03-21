<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisMoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::create('avis_moyens', function (Blueprint $table) {
         $table->increments('id');
           $table->integer('note');
           $table->string('commentaire');
           $table->integer('user_id')->unsigned()->nullable();
           $table->integer('moyen_id')->unsigned()->nullable();
           $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('moyen_id')->references('id')->on('moyens_transport')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avi_moyens');
    }
}
