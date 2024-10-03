<?php

namespace App\Imports;

use App\Models\TrafficByStates2020;
use Maatwebsite\Excel\Concerns\ToModel;

class TrafficByState2020Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TrafficByStates2020([
            //
        ]);
    }
}
