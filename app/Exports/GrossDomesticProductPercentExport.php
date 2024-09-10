<?php

namespace App\Exports;

use App\Models\GrossDomesticProductPercent;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GrossDomesticProductPercentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GrossDomesticProductPercent::all();
    }


    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Road Transport',
            'Rail Transport and Pipelines',
            'Water Transport',
            'Air Transport',
            'Transport Services',
            'Post and courier Services',
            'Total',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }
}
