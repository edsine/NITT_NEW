<?php

namespace App\Imports;

use App\Models\KadunaAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class KadunaAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KadunaAirport([
            //
        ]);
    }
}
