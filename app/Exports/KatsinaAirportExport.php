<?php

namespace App\Exports;

use App\Models\KatsinaAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class KatsinaAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KatsinaAirport::all();
    }
}
