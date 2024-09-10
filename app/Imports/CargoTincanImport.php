<?php

namespace App\Imports;

use App\Models\CargoTincan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoTincanImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Check if a record with the given ID already exists
         $CargoTincan = CargoTincan::find($row['id']);

         if ($CargoTincan) {
             // If the record exists, update it
             $CargoTincan->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
 
             return $CargoTincan;
         } else {
             // If the record does not exist, create a new one
             return new CargoTincan([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
         }
     }
}
