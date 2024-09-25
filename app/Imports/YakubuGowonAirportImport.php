<?php

namespace App\Imports;

use App\Models\YakubuGowonAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class YakubuGowonAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new YakubuGowonAirport([
            //
        ]);
    }
}
