<?php

namespace App\Exports;

use App\Models\TrafficByStates2010;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2010Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2010::all();
    }
}
