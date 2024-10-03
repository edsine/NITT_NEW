<?php

namespace App\Exports;

use App\Models\CausativeFactor2017;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactor2017Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor2017::all();
    }
}
