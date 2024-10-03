<?php

namespace App\Exports;

use App\Models\TrafficByStates2014;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2014Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2014::all();
    }
}
