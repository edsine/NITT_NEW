<?php

namespace App\Exports;

use App\Models\BeninAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class BeninAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BeninAirport::all();
    }
}
