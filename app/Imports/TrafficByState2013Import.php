<?php

namespace App\Imports;

use App\Models\TrafficByStates2013;
use Maatwebsite\Excel\Concerns\ToModel;

class TrafficByState2013Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TrafficByStates2013([
            //
        ]);
    }
}
