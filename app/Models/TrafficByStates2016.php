<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficByStates2016 extends Model
{
    use HasFactory;

    protected $table = 'traffic_by_states2016s';

    protected $fillable = [
        'state',
        'fatal_cases',
        'serious_cases',
        'minor_cases',
        'total_cases',
        'persons_killed',
        'persons_injured',
        'total_casualty',
    ];
}
