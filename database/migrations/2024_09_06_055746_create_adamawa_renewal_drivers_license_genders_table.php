<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdamawaRenewalDriversLicenseGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adamawa_renewal_drivers_license_genders', function (Blueprint $table) {
            $table->id();
            $table->integer('class_a_male',);
            $table->integer('class_a_female',);
            $table->integer('class_b_male',);
            $table->integer('class_b_female',);
            $table->integer('class_c_male');
            $table->integer('class_c_female',);
            $table->integer('class_d_male',);
            $table->integer('class_d_female',);
            $table->integer('class_e_male',);
            $table->integer('class_e_female');
            $table->integer('class_h_male',);
            $table->integer('class_h_female',);
            $table->integer('class_i_male',);
            $table->integer('class_i_female',);
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
        Schema::dropIfExists('adamawa_renewal_drivers_license_genders');
    }
}
