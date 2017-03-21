<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemeHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systeme_horaires', function (Blueprint $table) {
          $table->increments('id');
          $table->string('heureDepart');
          $table->string('heureArrive');
            $table->integer('moyen_id')->unsigned()->nullable();
             
          
   
            $table->timestamps();
              $table->foreign('moyen_id')->references('id')->on('moyens_transport')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('systemehoraires');
    }
}