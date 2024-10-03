<?php

namespace App\Exports;

use App\Models\CausativeFactor2020;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactor2020Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor2020::all();
    }
}
