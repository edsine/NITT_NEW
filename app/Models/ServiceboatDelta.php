<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceboatDelta extends Model
{
    use HasFactory;

    protected $table = 'serviceboat_deltas';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
