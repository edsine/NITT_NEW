<?php

namespace App\Imports;

use App\Models\MinnaAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class MinnaAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MinnaAirport([
            //
        ]);
    }
}
