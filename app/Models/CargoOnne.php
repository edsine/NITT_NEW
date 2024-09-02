<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoOnne extends Model
{
    use HasFactory;



    
    protected $table = 'cargo_onnes';

    protected $fillable = [
        'year',
        'import',
        'export',
        'throughput',
    ];
}
