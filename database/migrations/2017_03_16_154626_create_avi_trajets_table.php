<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAviTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avi_trajets', function (Blueprint $table) {
            $table->increments('id');
                $table->integer('note');
           $table->string('commentaire');
           $table->string('user_id');
          
            $table->timestamps();
           $table->foreign('user_id')->references('id')->on('users');
        });
    }
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avi_trajets');
    }
}
