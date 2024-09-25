<?php

namespace App\Exports;

use App\Models\SultanSaddikAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class SultanSaddikAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SultanSaddikAirport::all();
    }
}
