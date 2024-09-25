<?php

namespace App\Exports;

use App\Models\MinnaAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MinnaAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MinnaAirport::all();
    }
}
