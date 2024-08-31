<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RailPassengerTraffic extends Model
{
    use HasFactory;

    protected $table = 'rail_passenger_traffic';

    protected $fillable = [
        'year',
        'passenger_volume',
        'revenue',
        'freight',
    ];
}
