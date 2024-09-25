<?php

namespace App\Exports;

use App\Models\SamMbakweAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class SamMbakweAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SamMbakweAirport::all();
    }
}
