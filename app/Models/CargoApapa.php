<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoApapa extends Model
{
    use HasFactory;

   
    protected $table = 'cargo_apapas';

    protected $fillable = [
        'year',
        'import',
        'export',
        'throughput',
    ];

}
