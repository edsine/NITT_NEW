<?php

namespace App\Exports;

use App\Models\NnamdiAzikweAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class NnamdiAzikweAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NnamdiAzikweAirport::all();
    }
}
