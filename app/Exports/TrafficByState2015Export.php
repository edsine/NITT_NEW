<?php

namespace App\Exports;

use App\Models\TrafficByStates2015;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2015Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2015::all();
    }
}
