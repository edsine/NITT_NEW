<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkwaIbomFleetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akwa_ibom_fleets', function (Blueprint $table) {
            $table->id();
            $table->string('year',);
            $table->integer('4pc',);
            $table->integer('7pc',);
            $table->integer('10pc_minibus',);
            $table->integer('14pc_minibus',);
            $table->integer('18pc_minibus',);
            $table->integer('coaster',);
            $table->integer('big_bus',);
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
        Schema::dropIfExists('akwa_ibom_fleets');
    }
}
