<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkwaIbomTransportFromUyosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akwa_ibom_transport_from_uyos', function (Blueprint $table) {
            $table->id();
            $table->string('destination',);
            $table->integer('2018',);
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
        Schema::dropIfExists('akwa_ibom_transport_from_uyos');
    }
}
