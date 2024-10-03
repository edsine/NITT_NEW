<?php

namespace App\Exports;

use App\Models\TrafficByStates2006;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2006Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2006::all();
    }
}
