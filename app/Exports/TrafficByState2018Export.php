<?php

namespace App\Exports;

use App\Models\TrafficByStates2018;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2018Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2018::all();
    }
}
