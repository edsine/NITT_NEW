<?php

namespace App\Imports;

use App\Models\SamMbakweAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class SamMbakweAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SamMbakweAirport([
            //
        ]);
    }
}
