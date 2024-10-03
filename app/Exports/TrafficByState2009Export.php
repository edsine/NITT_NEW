<?php

namespace App\Exports;

use App\Models\TrafficByStates2009;
use Maatwebsite\Excel\Concerns\FromCollection;

class TrafficByState2009Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrafficByStates2009::all();
    }
}
