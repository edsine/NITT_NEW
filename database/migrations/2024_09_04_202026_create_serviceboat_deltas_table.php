<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceboatDeltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceboat_deltas', function (Blueprint $table) {
            $table->id();
            $table->string('year', 15,);
            $table->decimal('number_of_vessels', 15, );
            $table->decimal('grt', 15, );
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
        Schema::dropIfExists('serviceboat_deltas');
    }
}
