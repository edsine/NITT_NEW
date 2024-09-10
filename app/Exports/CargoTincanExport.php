<?php

namespace App\Exports;

use App\Models\CargoTincan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CargoTincanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CargoTincan::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Import',
            'Export',
            'Throughput',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }
}
