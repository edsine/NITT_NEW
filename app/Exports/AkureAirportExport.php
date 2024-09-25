<?php

namespace App\Exports;

use App\Models\AkureAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class AkureAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AkureAirport::all();
    }
}
