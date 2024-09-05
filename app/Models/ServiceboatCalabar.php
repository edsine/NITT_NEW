<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceboatCalabar extends Model
{
    use HasFactory;

    protected $table = 'serviceboat_calabars';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
