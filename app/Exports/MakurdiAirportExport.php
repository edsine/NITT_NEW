<?php

namespace App\Exports;

use App\Models\MakurdiAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MakurdiAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MakurdiAirport::all();
    }
}
