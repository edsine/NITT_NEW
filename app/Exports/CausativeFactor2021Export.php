<?php

namespace App\Exports;

use App\Models\CausativeFactor2021;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactor2021Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor2021::all();
    }
}
