<?php

namespace App\Imports;

use App\Models\AkanuIbiamAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class AkanuIbiamAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AkanuIbiamAirport([
            //
        ]);
    }
}
