<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoyendeTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moyende_transports', function (Blueprint $table) {
            $table->increments('id');
          $table->string('type');
            $table->string('user_id');
          $table->string('trajet_id');
          $table->string('systemehoraires_id');
          $table->string('avimoyen_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('trajet_id')->references('id')->on('trajets');
          $table->foreign('systemehoraires_id')->references('id')->on('systemehoraires');
          $table->foreign('avimoyen_id')->references('id')->on('avimoyens');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moyende_transports');
    }
}
