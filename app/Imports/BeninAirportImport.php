<?php

namespace App\Imports;

use App\Models\BeninAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class BeninAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BeninAirport([
            //
        ]);
    }
}
