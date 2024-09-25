<?php

namespace App\Exports;

use App\Models\AkanuIbiamAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class AkanuIbiamAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AkanuIbiamAirport::all();
    }
}
