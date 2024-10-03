<?php

namespace App\Exports;

use App\Models\CausativeFactor2019;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactor2019Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor2019::all();
    }
}
