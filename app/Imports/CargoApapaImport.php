<?php

namespace App\Imports;

use App\Models\CargoApapa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoApapaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Check if a record with the given ID already exists
        $CargoApapa = CargoApapa::find($row['id']);

        if ($CargoApapa) {
            // If the record exists, update it
            $CargoApapa->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
            ]);

            return $CargoApapa;
        } else {
            // If the record does not exist, create a new one
            return new CargoApapa([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['throughput'],
                        ]);
        }
    }
}
