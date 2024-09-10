<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdamawaTrafficOffencesVio extends Model
{
    use HasFactory;

    protected $table = 'adamawa_traffic_offences_vios';

    protected $fillable = [
        'traffic_offences',
        '2010',
        '2011',
        '2012',
        '2013',
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
