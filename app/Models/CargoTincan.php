<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoTincan extends Model
{
    use HasFactory;

    
    protected $table = 'cargo_tincans';

    protected $fillable = [
        'year',
        'import',
        'export',
        'throughput',
    ];
}
