<?php

namespace App\Exports;

use App\Models\CausativeFactor2014;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactor2014Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor2014::all();
    }
}
