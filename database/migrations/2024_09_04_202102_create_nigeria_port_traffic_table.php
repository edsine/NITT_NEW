<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNigeriaPortTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nigeria_port_traffic', function (Blueprint $table) {
            $table->id();
            $table->string('year', 15,);
            $table->decimal('2012', 15,);
            $table->decimal('2013', 15,);
            $table->decimal('2014', 15,);
            $table->decimal('2015', 15,);
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
        Schema::dropIfExists('nigeria_port_traffic');
    }
}
