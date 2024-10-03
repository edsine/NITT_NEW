<?php

namespace App\Exports;

use App\Models\TrafficByStates2019;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2019Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2019::all();
    }
}
