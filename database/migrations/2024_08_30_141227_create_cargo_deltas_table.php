<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoDeltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_deltas', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15, 2);
            $table->decimal('import', 15, 2);
            $table->decimal('export', 15, 2);
            $table->decimal('throughput', 15, 2);
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
        Schema::dropIfExists('cargo_deltas');
    }
}
