<?php

namespace App\Exports;

use App\Models\MurtalaMuhammedAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MurtalaMuhammedAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MurtalaMuhammedAirport::all();
    }
}
