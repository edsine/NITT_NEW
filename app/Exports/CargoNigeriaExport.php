<?php

namespace App\Exports;

use App\Models\CargoNigeria;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CargoNigeriaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CargoNigeria::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Import',
            'Export',
            'Total_Throughput',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }
}
