<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoadTrafficCrashesYear extends Model
{
    use HasFactory;

    protected $table = 'road_traffic_crashes_years';

    protected $fillable = [
        'year',
        'fatal_cases',
        'serious_cases',
        'minor_cases',
        'total_cases',
        'persons_killed',
        'persons_injured',
        'total_casualty',
    ];
}
