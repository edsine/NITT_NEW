<?php

namespace App\Imports;

use App\Models\TrafficByStates2021;
use Maatwebsite\Excel\Concerns\ToModel;

class TrafficByState2021Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TrafficByStates2021([
            //
        ]);
    }
}
