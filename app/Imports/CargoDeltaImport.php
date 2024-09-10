<?php

namespace App\Imports;

use App\Models\CargoDelta;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoDeltaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         // Check if a record with the given ID already exists
         $CargoDelta = CargoDelta::find($row['id']);

         if ($CargoDelta) {
             // If the record exists, update it
             $CargoDelta->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
 
             return $CargoDelta;
         } else {
             // If the record does not exist, create a new one
             return new CargoDelta([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
             ]);
         }
     }
}
