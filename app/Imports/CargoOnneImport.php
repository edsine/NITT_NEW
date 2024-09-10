<?php

namespace App\Imports;

use App\Models\CargoOnne;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoOnneImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Check if a record with the given ID already exists
         $CargoOnne = CargoOnne::find($row['id']);

         if ($CargoOnne) {
             // If the record exists, update it
             $CargoOnne->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
 
             return $CargoOnne;
         } else {
             // If the record does not exist, create a new one
             return new CargoOnne([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
         }
     }
}
