<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkwaIbomAccident extends Model
{
    use HasFactory;

    protected $table = 'akwa_ibom_accidents';

    protected $fillable = [
        'year',
        'no_of_accidents',
        'write_off',
        
    ];
}
