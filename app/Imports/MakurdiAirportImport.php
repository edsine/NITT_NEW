<?php

namespace App\Imports;

use App\Models\MakurdiAirport;
use Maatwebsite\Excel\Concerns\ToModel;

class MakurdiAirportImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MakurdiAirport([
            //
        ]);
    }
}
