<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonsInjuredRoadCrashes extends Model
{
    use HasFactory;

    protected $table = 'persons_injured_road_crashes';

    protected $fillable = [
        'route',
        '2017',
        '2019',
        '2020',
        '2021',
    ];
}
