<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetRoadCrashes4q2015 extends Model
{
    use HasFactory;

    protected $table = 'fleet_road_crashes4q2015s';

    protected $fillable = [
        'no_of_cases',
        'no_of_killed',
        'no_of_injured',
        'total_casualty',
        'no_persons_involved',
    ];
}
