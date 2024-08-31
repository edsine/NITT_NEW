<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRailPassengerTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rail_passenger_traffic', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->decimal('passenger_volume', 15, 2);
            $table->decimal('revenue', 15, 2);
            $table->decimal('freight', 15, 2);
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
        Schema::dropIfExists('rail_passenger_traffic');
    }
}
