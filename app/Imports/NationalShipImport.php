<?php

namespace App\Imports;

use App\Models\NationalShip;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NationalShipImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Ensure 'year' is present, otherwise skip the row
        if (isset($row['year']) && isset($row['ship_traffic']) && isset($row['container_traffic']) && isset($row['cargo_throughput'])) {

            // Check if a record with the given ID already exists
            $nationalShip = NationalShip::find($row['id']);

            if ($nationalShip) {
                // If the record exists, update it
                $nationalShip->update([
                    'year'  => $row['year'],
                    'ship_traffic' => $row['ship_traffic'],
                    'container_traffic' => $row['container_traffic'],
                    'cargo_throughput' => $row['cargo_throughput'],
                ]);

                return $nationalShip;
            } else {
                // If the record does not exist, create a new one
                return new NationalShip([
                    'id' => $row['id'], // Use the ID from the spreadsheet
                    'year'  => $row['year'],
                    'ship_traffic' => $row['ship_traffic'],
                    'container_traffic' => $row['container_traffic'],
                    'cargo_throughput' => $row['cargo_throughput'],
                ]);
            }
        }

        // Return null if mandatory fields are not set
        return null;
    }
}
