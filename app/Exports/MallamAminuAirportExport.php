<?php

namespace App\Exports;

use App\Models\MallamAminuAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MallamAminuAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MallamAminuAirport::all();
    }
}
