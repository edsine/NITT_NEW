<?php

namespace App\Imports;

use App\Models\VehicleImportation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;


class VehicleImportantImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Check if a record with the given ID already exists
        $vehicle = VehicleImportation::find($row['id']);

        if ($vehicle) {
            // If the record exists, update it
            $vehicle->update([
                'year'  => $row['year'],
                'vehicle_category' => $row['vehicle_category'],
                'new_vehicle_count' => $row['new_vehicle_count'],
                'used_vehicle_count' => $row['used_vehicle_count'],
            ]);

            return $vehicle;
        } else {
            // If the record does not exist, create a new one
            return new VehicleImportation([
                'id' => $row['id'], // Use the ID from the spreadsheet
                'year'  => $row['year'],
                'vehicle_category' => $row['vehicle_category'],
                'new_vehicle_count' => $row['new_vehicle_count'],
                'used_vehicle_count' => $row['used_vehicle_count'],
            ]);
        }
    }
}



      

