<?php

namespace App\Imports;

use App\Models\TrafficByStates2018;
use Maatwebsite\Excel\Concerns\ToModel;

class TrafficByState2018Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TrafficByStates2018([
            //
        ]);
    }
}
