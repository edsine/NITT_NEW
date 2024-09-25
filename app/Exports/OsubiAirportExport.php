<?php

namespace App\Exports;

use App\Models\OsubiAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class OsubiAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OsubiAirport::all();
    }
}
