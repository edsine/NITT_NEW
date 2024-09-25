<?php

namespace App\Exports;

use App\Models\IlorinAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class IlorinAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IlorinAirport::all();
    }
}
