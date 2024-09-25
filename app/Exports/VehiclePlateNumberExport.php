<?php

namespace App\Exports;

use App\Models\VehiclePlateNumber;
use Maatwebsite\Excel\Concerns\FromCollection;

class VehiclePlateNumberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VehiclePlateNumber::all();
    }
}
