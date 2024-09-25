<?php

namespace App\Exports;

use App\Models\YakubuGowonAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class YakubuGowonAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return YakubuGowonAirport::all();
    }
}
