<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceboatApapa extends Model
{
    use HasFactory;

    protected $table = 'serviceboat_apapas';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
