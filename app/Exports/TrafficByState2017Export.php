<?php

namespace App\Exports;

use App\Models\TrafficByStates2017;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2017Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2017::all();
    }
}
