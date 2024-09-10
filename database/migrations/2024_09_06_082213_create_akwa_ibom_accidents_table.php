<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkwaIbomAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akwa_ibom_accidents', function (Blueprint $table) {
            $table->id();
            $table->string('year',);
            $table->integer('no_of_accidents',);
            $table->integer('write_off',);
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
        Schema::dropIfExists('akwa_ibom_accidents');
    }
}
