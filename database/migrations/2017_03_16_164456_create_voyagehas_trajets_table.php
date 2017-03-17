<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagehasTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyagehas_trajets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voyage_id');
            $table->string('trajet_id');
            $table->timestamps();
           $table->foreign('voyage_id')->references('id')->on('voyages');
           $table->foreign('trajet_id')->references('id')->on('trajets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voyagehas_trajets');
    }
}
