<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstablishmentsCookingTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments_cooking_types', function (Blueprint $table){
            $table->increments('id');
            $table->integer('establishment_id')->unsigned();
            $table->integer('cooking_type_id')->unsigned();

            $table->foreign('establishment_id')->references('id')->on('establishments');
            $table->foreign('cooking_type_id')->references('id')->on('cooking_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments_cooking_types');
    }
}
