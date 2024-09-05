<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VesselsOnne extends Model
{
    use HasFactory;

    protected $table = 'vessels_onnes';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
