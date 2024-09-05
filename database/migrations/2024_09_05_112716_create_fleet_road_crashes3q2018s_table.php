<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFleetRoadCrashes3q2018sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fleet_road_crashes3q2018s', function (Blueprint $table) {
            $table->id();
            $table->integer('no_of_cases');
            $table->integer('no_of_killed',);
            $table->integer('no_of_injured',);
            $table->integer('total_casualties',);
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
        Schema::dropIfExists('fleet_road_crashes3q2018s');
    }
}
