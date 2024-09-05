<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NigeriaPortTraffic extends Model
{
    use HasFactory;

    
    protected $table = 'nigeria_port_traffic';

    protected $fillable = [
        'port',
        '2012',
        '2013',
        '2014',
        '2015',
    ];
}
