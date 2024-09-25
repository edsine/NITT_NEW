<?php

namespace App\Exports;

use App\Models\MaiduguriAirport;
use Maatwebsite\Excel\Concerns\FromCollection;

class MaiduguriAirportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MaiduguriAirport::all();
    }
}
