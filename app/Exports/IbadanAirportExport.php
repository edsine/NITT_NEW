<?php

namespace App\Exports;

use App\Models\IbadanAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class IbadanAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IbadanAirport::all();
    }
}
