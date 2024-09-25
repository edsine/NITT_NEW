<?php

namespace App\Imports;

use App\Models\AkureAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class AkureAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AkureAirport([
            //
        ]);
    }
}
