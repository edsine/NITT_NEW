<?php

namespace App\Exports;

use App\Models\YolaAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class YolaAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return YolaAirport::all();
    }
}
