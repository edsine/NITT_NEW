<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceboatOnne extends Model
{
    use HasFactory;

    protected $table = 'serviceboat_onnes';

    protected $fillable = [
        'year',
        'number_of_vessels',
        'grt',
    ];

}
