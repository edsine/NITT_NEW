<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortharcourtAirportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portharcourt_airports', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15, );
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
        Schema::dropIfExists('portharcourt_airports');
    }
}
