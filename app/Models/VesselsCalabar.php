<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VesselsCalabar extends Model
{
    use HasFactory;

    protected $table = 'vessels_calabars';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
