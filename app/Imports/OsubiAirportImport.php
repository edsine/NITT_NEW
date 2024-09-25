<?php

namespace App\Imports;

use App\Models\OsubiAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class OsubiAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new OsubiAirport([
            //
        ]);
    }
}
