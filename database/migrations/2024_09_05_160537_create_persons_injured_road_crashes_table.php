<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsInjuredRoadCrashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons_injured_road_crashes', function (Blueprint $table) {
            $table->id();
            $table->string('route');
            $table->integer('2017',);
            $table->integer('2019',);
            $table->integer('2020',);
            $table->integer('2021',);
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
        Schema::dropIfExists('persons_injured_road_crashes');
    }
}
