<?php

namespace App\Imports;

use App\Models\MurtalaMuhammedAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class MurtalaMuhammedAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MurtalaMuhammedAirport([
            //
        ]);
    }
}
