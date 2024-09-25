<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeninAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benin_airports', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15, 2);
            $table->decimal('domestic_passenger_traffic', 15, );
            $table->decimal('international_passenger_traffic', 15, );
            $table->decimal('air_traffic_domestic', 15, );
            $table->decimal('air_traffic_international', 15, );
            $table->decimal('cargo_traffic_domestic', 15, );
            $table->decimal('cargo_traffic_international', 15, );
            $table->decimal('mail_traffic_domestic', 15, );
            $table->decimal('mail_traffic_international', 15, );
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
        Schema::dropIfExists('benin_airports');
    }
}
