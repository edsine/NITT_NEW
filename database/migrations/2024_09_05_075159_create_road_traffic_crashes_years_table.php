<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadTrafficCrashesYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_traffic_crashes_years', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15, 2);
            $table->decimal('fatal_cases', 15, 2);
            $table->decimal('serious_cases', 15, 2);
            $table->decimal('minor_cases', 15, 2);
            $table->decimal('total_cases', 15, 2);
            $table->decimal('persons_killed', 15, 2);
            $table->decimal('persons_injured', 15, 2);
            $table->decimal('total_casualty', 15, 2);
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
        Schema::dropIfExists('road_traffic_crashes_years');
    }
}
