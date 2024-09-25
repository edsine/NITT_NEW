<?php

namespace App\Imports;

use App\Models\MallamAminuAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class MallamAminuAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MallamAminuAirport([
            //
        ]);
    }
}
