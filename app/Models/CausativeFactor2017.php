<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CausativeFactor2017 extends Model
{
    use HasFactory;

    protected $table = 'causative_factor2017s';

    protected $fillable = [
        'state',
        'spv',
        'upwd',
        'tbt',
        'loc',
        'mdv',
        'wov',
        'bfl',
        'ovl',
        'dot',
        'wot',
        'dgd',
        'brd',
        'rtv',
        'obs',
        'sos',
        'dov',
        'dad',
        'rov',
        'pwr',
        'ftq',
        'slv',
        'others',
        'total',
    ];
}
