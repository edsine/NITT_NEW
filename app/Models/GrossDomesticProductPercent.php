<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrossDomesticProductPercent extends Model
{
    use HasFactory;



    protected $table = 'gross_domestic_product_percents';

    protected $fillable = [
        'year',
        'road_transport',
        'rail_transport_and_pipelines',
        'water_transport',
        'air_transport',
        'transport_services',
        'post_and_courier_services',
        'total',
    ];





}
