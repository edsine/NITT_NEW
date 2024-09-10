<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleKilledRoadCrashes extends Model
{
    use HasFactory;

    protected $table = 'people_killed_road_crashes';

    protected $fillable = [
        'route',
        '2017',
        '2019',
        '2020',
        '2021',
    ];
}
