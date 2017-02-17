<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Establishments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->string('name');
            $table->longText('description_esp');
            $table->longText('description_cat');
            $table->text('timetable_esp');
            $table->text('timetable_cat');
            $table->string('city');
            $table->text('address');
            $table->string('phone');
            $table->text('web');
            $table->string('price');
            $table->text('cooking_type');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments');
    }
}
