<?php

namespace App\Exports;

use App\Models\TrafficByStates2011;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2011Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2011::all();
    }
}
