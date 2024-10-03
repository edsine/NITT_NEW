<?php

namespace App\Exports;

use App\Models\TrafficByStates2012;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2012Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2012::all();
    }
}
