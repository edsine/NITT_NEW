<?php

namespace App\Imports;

use App\Models\CargoCalabar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoCalabarImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Check if a record with the given ID already exists
         $CargoCalabar = CargoCalabar::find($row['id']);

         if ($CargoCalabar) {
             // If the record exists, update it
             $CargoCalabar->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
 
             return $CargoCalabar;
         } else {
             // If the record does not exist, create a new one
             return new CargoCalabar([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
         }
     }
}
