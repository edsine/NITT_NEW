<?php

namespace App\Imports;

use App\Models\VehiclePlateNumber;
use Maatwebsite\Excel\Concerns\ToModel;

class VehiclePlateNumberImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VehiclePlateNumber([
            //
        ]);
    }
}
