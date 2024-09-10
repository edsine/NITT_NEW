<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorRoadTraffic extends Model
{
    use HasFactory;

    protected $table = 'major_road_traffic';

    protected $fillable = [
        'route',
        '2017',
        '2019',
        '2020',
        '2021',
    ];
}
