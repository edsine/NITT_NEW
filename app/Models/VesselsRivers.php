<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VesselsRivers extends Model
{
    use HasFactory;

    protected $table = 'vessels_rivers';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
