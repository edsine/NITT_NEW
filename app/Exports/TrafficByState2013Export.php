<?php

namespace App\Exports;

use App\Models\TrafficByStates2013;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2013Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2013::all();
    }
}
