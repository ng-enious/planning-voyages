<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyageTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyage_trajets', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('voyage_id');
            $table->integer('trajet_id');
            $table->timestamps();
     $table->foreign('trajet_id')->references('id')->on('trajets')->onDelete('cascade');
           $table->foreign('voyage_id')->references('id')->on('voyages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyagehas_trajet');
    }
}