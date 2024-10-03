<?php

namespace App\Exports;

use App\Models\CausativeFactor;
use Maatwebsite\Excel\Concerns\FromCollection;

class CausativeFactorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CausativeFactor::all();
    }
}
