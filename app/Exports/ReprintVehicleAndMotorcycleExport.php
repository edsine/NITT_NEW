<?php

namespace App\Exports;

use App\Models\ReprintVehicleAndMotorcycle;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReprintVehicleAndMotorcycleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ReprintVehicleAndMotorcycle::all();
    }
}
