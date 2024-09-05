<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinnaAirport extends Model
{
    use HasFactory;

    protected $table = 'minna_airports';

    protected $fillable = [
        'year',
        'domestic_passenger_traffic',
        'international_passenger_traffic',
        'air_traffic_domestic',
        'air_traffic_international',
        'cargo_traffic_domestic',
        'cargo_traffic_international',
        'mail_traffic_domestic',
        'mail_traffic_international',
    ];
}
