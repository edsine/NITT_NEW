<?php

namespace App\Exports;

use App\Models\KadunaAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class KadunaAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KadunaAirport::all();
    }
}
