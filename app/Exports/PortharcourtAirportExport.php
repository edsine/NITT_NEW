<?php

namespace App\Exports;

use App\Models\PortharcourtAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class PortharcourtAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PortharcourtAirport::all();
    }
}
