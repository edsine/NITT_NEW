<?php

namespace App\Imports;

use App\Models\RailPassengerTraffic;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RailPassengerTrafficImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Check if a record with the given ID already exists
        $railPassenger = RailPassengerTraffic::find($row['id']);

        if ($railPassenger) {
            // If the record exists, update it
            $railPassenger->update([
                'year' => $row['year'],
                'passenger_volume' => $row['passenger_volume'],
                'revenue' => $row['revenue'],
                'freight' => $row['freight'],
                        ]);

            return $railPassenger;
        } else {
            // If the record does not exist, create a new one
            return new RailPassengerTraffic([
                'year' => $row['year'],
                'passenger_volume' => $row['passenger_volume'],
                'revenue' => $row['revenue'],
                'freight' => $row['freight'],
                        ]);
        }
    }
}
