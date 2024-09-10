<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalDriversLicenseStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('national_drivers_license_states', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->integer('2007',);
            $table->integer('2008',);
            $table->integer('2009',);
            $table->integer('2010',);
            $table->integer('2011');
            $table->integer('2012',);
            $table->integer('2013',);
            $table->integer('2014',);
            $table->integer('2015',);
            $table->integer('2016');
            $table->integer('2017',);
            $table->integer('2018',);
            $table->integer('2019',);
            $table->integer('2020',);
            $table->integer('2021');
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
        Schema::dropIfExists('national_drivers_license_states');
    }
}
