<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoDelta extends Model
{
    use HasFactory;


    
    protected $table = 'cargo_deltas';

    protected $fillable = [
        'year',
        'import',
        'export',
        'throughput',
    ];
}
