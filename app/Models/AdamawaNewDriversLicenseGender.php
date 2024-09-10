<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdamawaNewDriversLicenseGender extends Model
{
    use HasFactory;

    protected $table = 'adamawa_new_drivers_license_genders';

    protected $fillable = [
        'year',
        'class_a_male',
        'class_a_female',
        'class_b_male',
        'class_b_female',
        'class_c_male',
        'class_c_female',
        'class_d_male',
        'class_d_female',
        'class_e_male',
        'class_e_female',
        'class_h_male',
        'class_h_female',
        'class_i_male',
        'class_i_female',
        
    ];
}
