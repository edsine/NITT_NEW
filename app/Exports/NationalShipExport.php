<?php

namespace App\Exports;

use App\Models\NationalShip;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NationalShipExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NationalShip::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Ship_traffic',
            'container_traffic',
            'cargo_throughput',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }




}
