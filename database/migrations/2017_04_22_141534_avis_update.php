<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvisUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('avis_trajets', function (Blueprint $table) {
            $table->Integer('note')->after('id');
           $table->String('commentaire')->after('note');
             $table->integer('user_id')->unsigned()->nullable();
           $table->integer('trajet_id')->unsigned()->nullable();
            $table->foreign('trajet_id')->references('id')->on('trajet')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
