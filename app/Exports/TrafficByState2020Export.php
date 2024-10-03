<?php

namespace App\Exports;

use App\Models\TrafficByStates2020;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2020Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2020::all();
    }
}
