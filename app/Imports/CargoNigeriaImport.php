<?php

namespace App\Imports;

use App\Models\CargoNigeria;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CargoNigeriaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Check if a record with the given ID already exists
        $CargoNigeria = CargoNigeria::find($row['id']);

        if ($CargoNigeria) {
            // If the record exists, update it
            $CargoNigeria->update([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['total_throughput'],
            ]);

            return $CargoNigeria;
        } else {
            // If the record does not exist, create a new one
            return new CargoNigeria([
                'year' => $row['year'],
                'import' => $row['import'],
                'export' => $row['export'],
                'throughput' => $row['total_throughput'],
            ]);
        }
    }
}
