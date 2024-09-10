<?php

namespace App\Exports;

use App\Models\CargoCalabar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CargoCalabarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CargoCalabar::all();
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
