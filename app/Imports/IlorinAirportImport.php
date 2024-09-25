<?php

namespace App\Imports;

use App\Models\IlorinAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class IlorinAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new IlorinAirport([
            //
        ]);
    }
}
