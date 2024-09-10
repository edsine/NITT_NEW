<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausativeFactor2021sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causative_factor2021s', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->integer('spv',);
            $table->integer('upwd',);
            $table->integer('tbt',);
            $table->integer('loc',);
            $table->integer('mdv',);
            $table->integer('wov',);
            $table->integer('bfl',);
            $table->integer('ovl',);
            $table->integer('dot',);
            $table->integer('wot',);
            $table->integer('dgd',);
            $table->integer('brd',);
            $table->integer('rtv',);
            $table->integer('obs',);
            $table->integer('sos',);
            $table->integer('dov',);
            $table->integer('dad',);
            $table->integer('rov',);
            $table->integer('pwr',);
            $table->integer('ftq',);
            $table->integer('slv',);
            $table->integer('others',);
            $table->integer('totals',);
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
        Schema::dropIfExists('causative_factor2021s');
    }
}
