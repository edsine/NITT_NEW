<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetRoadCrashes3q2021 extends Model
{
    use HasFactory;

    protected $table = 'fleet_road_crashes3q2021s';

    protected $fillable = [
        'no_of_cases',
        'no_of_killed',
        'no_of_injured',
        'total_casualty',
        'no_persons_involved',
    ];
}
