<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoRivers extends Model
{
    use HasFactory;

    
    protected $table = 'cargo_rivers';

    protected $fillable = [
        'year',
        'import',
        'export',
        'throughput',
    ];
}
