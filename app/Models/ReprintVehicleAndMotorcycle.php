<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReprintVehicleAndMotorcycle extends Model
{
    use HasFactory;

    protected $table = 'reprint_vehicle_and_motorcycles';

    protected $fillable = [
        'category',
        '2008',
        '2009',
        '2010',
        '2014',
        '2015',
        '2016',
        '2017',
        '2018',
        '2019',
        '2020',
        '2021',
        '2022',
    ];
}
