<?php

namespace App\Imports;

use App\Models\PortharcourtAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class PortharcourtAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PortharcourtAirport([
            //
        ]);
    }
}
