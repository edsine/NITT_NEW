<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoNigeria extends Model
{
    use HasFactory;


    
    protected $table = 'cargo_nigerias';

    protected $fillable = [
        'year',
        'import',
        'export',
        'total_throughput',
    ];
}
