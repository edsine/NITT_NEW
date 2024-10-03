<?php

namespace App\Exports;

use App\Models\TrafficByStates2016;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2016Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2016::all();
    }
}
