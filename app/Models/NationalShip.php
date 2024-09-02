<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationalShip extends Model
{
    use HasFactory;



    protected $table = 'national_ships';

    protected $fillable = [
        'year' => 'required|integer',
        'ship_traffic' => 'required|numeric',
        'container_traffic' => 'required|numeric',
        'cargo_throughput' => 'required|numeric',
    ];
}
