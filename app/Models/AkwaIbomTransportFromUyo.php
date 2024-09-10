<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkwaIbomTransportFromUyo extends Model
{
    use HasFactory;

    protected $table = 'akwa_ibom_transport_from_uyos';

    protected $fillable = [
        'destination',
        '2018',
        '2019',
        '2020',
        '2021',
        '2022',
    ];
}
