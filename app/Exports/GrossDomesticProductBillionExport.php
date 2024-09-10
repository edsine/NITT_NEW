<?php

namespace App\Exports;

use App\Models\GrossDomesticProductBillion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GrossDomesticProductBillionExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GrossDomesticProductBillion::all();
    }



    public function headings(): array
    {
        return [
            'ID',
            'Year',
            'Transportation and Storage',
            'Road Transport',
            'Rail Transport and Pipelines',
            'Water Transport',
            'Air Transport',
            'Transport Services',
            'Post and courier Services',
            'Created At',   // If you want to include the timestamp fields
            'Updated At',   // If you want to include the timestamp fields
        ];
    }
}
