<?php

namespace App\Exports;

use App\Models\TrafficByStates2008;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2008Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2008::all();
    }
}
