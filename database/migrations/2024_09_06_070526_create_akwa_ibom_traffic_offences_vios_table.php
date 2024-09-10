<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkwaIbomTrafficOffencesViosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akwa_ibom_traffic_offences_vios', function (Blueprint $table) {
            $table->id();
            $table->string('traffic_offences',);
            $table->integer('2010',);
            $table->integer('2011',);
            $table->integer('2012',);
            $table->integer('2013');
            $table->integer('2014',);
            $table->integer('2015',);
            $table->integer('2016',);
            $table->integer('2017',);
            $table->integer('2018');
            $table->integer('2019',);
            $table->integer('2020',);
            $table->integer('2021',);
            $table->integer('2022',);
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
        Schema::dropIfExists('akwa_ibom_traffic_offences_vios');
    }
}
