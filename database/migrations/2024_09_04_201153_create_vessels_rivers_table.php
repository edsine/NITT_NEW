<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselsRiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessels_rivers', function (Blueprint $table) {
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
        Schema::dropIfExists('vessels_rivers');
    }
}
