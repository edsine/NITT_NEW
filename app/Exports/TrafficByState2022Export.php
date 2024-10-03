<?php

namespace App\Exports;

use App\Models\TrafficByStates2022;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2022Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2022::all();
    }
}
