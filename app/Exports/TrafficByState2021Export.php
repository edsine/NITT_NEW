<?php

namespace App\Exports;

use App\Models\TrafficByStates2021;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2021Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2021::all();
    }
}
