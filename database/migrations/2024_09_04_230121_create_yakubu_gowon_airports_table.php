<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYakubuGowonAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yakubu_gowon_airports', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15, 2);
            $table->decimal('domestic_passenger_traffic', 15, 2);
            $table->decimal('international_passenger_traffic', 15, 2);
            $table->decimal('air_traffic_domestic', 15, 2);
            $table->decimal('air_traffic_international', 15, 2);
            $table->decimal('cargo_traffic_domestic', 15, 2);
            $table->decimal('cargo_traffic_international', 15, 2);
            $table->decimal('mail_traffic_domestic', 15, 2);
            $table->decimal('mail_traffic_international', 15, 2);
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
        Schema::dropIfExists('yakubu_gowon_airports');
    }
}
