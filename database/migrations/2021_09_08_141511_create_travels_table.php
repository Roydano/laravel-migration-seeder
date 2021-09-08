<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->text('travel_description');
            $table->tinyInteger('days_travel')->unsigned();
            $table->tinyInteger('person')->unsigned();
            $table->string('overnight_stay', 50);
            $table->string('hotel_name', 100);
            $table->text('description')->nullable();
            $table->tinyInteger('all_inclusive')->unsigned()->default(1);
            $table->tinyInteger('parking_area')->unsigned()->default(1);
            $table->tinyInteger('pool')->unsigned()->default(1);
            $table->float('price', 7,2);
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
        Schema::dropIfExists('travels');
    }
}
