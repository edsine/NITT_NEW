<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CausativeFactor extends Model
{
    use HasFactory;

    protected $table = 'causative_factors';

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
