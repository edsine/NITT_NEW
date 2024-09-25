<?php

namespace App\Exports;

use App\Models\MotorCyclePlateNumber;
use Maatwebsite\Excel\Concerns\FromCollection;

class MotorCyclePlateNumberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MotorCyclePlateNumber::all();
    }
}
