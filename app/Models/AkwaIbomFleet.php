<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkwaIbomFleet extends Model
{
    use HasFactory;

    protected $table = 'akwa_ibom_fleet';

    protected $fillable = [
        'year',
        '4pc',
        '7pc',
        '10pc_minibus',
        '14pc_minibus',
        '18pc_minibus',
        'coaster',
        'big_bus',
        
    ];
}
