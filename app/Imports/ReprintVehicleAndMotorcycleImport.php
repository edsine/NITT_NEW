<?php

namespace App\Imports;

use App\Models\ReprintVehicleAndMotorcycle;
use Maatwebsite\Excel\Concerns\ToModel;

class ReprintVehicleAndMotorcycleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ReprintVehicleAndMotorcycle([
            //
        ]);
    }
}
