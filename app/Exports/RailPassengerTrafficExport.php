<?php

namespace App\Exports;

use App\Models\RailPassengerTraffic;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RailPassengerTrafficExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RailPassengerTraffic::all();
    }


    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Passenger_volume',
            'Revenue',
            'Freight',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }

}
