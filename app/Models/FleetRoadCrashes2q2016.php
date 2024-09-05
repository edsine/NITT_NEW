<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetRoadCrashes2q2016 extends Model
{
    use HasFactory;

    protected $table = 'fleet_road_crashes2q2016s';

    protected $fillable = [
        'no_of_cases',
        'no_of_killed',
        'no_of_injured',
        'total_casualty',
        'no_persons_involved',
    ];
}
