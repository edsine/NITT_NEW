<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoApapasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_apapas', function (Blueprint $table) {
            $table->id();
            $table->decimal('year', 15,);
            $table->decimal('import', 15,);
            $table->decimal('export', 15,);
            $table->decimal('throughput', 15,);
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
        Schema::dropIfExists('cargo_apapas');
    }
}
