<?php

namespace App\Imports;

use App\Models\CargoRivers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoRiversImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Check if a record with the given ID already exists
         $CargoRivers = CargoRivers::find($row['id']);

         if ($CargoRivers) {
             // If the record exists, update it
             $CargoRivers->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
 
             return $CargoRivers;
         } else {
             // If the record does not exist, create a new one
             return new CargoRivers([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
         }
     }
}
