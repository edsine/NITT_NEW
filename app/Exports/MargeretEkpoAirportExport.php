<?php

namespace App\Exports;

use App\Models\MargeretEkpoAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MargeretEkpoAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MargeretEkpoAirport::all();
    }
}
