<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrossDomesticProductPercentsTable extends Migration
{
    public function up()
    {
        Schema::create('gross_domestic_product_percents', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->decimal('road_transport', 15, 2);
            $table->decimal('rail_transport_and_pipelines', 15, 2);
            $table->decimal('water_transport', 15, 2);
            $table->decimal('air_transport', 15, 2);
            $table->decimal('transport_services', 15, 2);
            $table->decimal('post_and_courier_services', 15, 2);
            $table->decimal('total', 15, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gross_domestic_product_percents');
    }
}
