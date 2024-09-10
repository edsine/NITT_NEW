<?php
namespace App\Imports;

use App\Models\GrossDomesticProductBillion;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GrossDomesticProductBillionImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // Check if a record with the given ID already exists
        $gross_billion = GrossDomesticProductBillion::find($row['id']);

        if ($gross_billion) {
            // If the record exists, update it
            $gross_billion->update([
                'year' => $row['year'],
                'transportation_and_storage' => $row['transportation_and_storage'],
                'road_transport' => $row['road_transport'],
                'rail_transport_and_pipelines' => $row['rail_transport_and_pipelines'],
                'water_transport' => $row['water_transport'],
                'air_transport' => $row['air_transport'],
                'transport_services' => $row['transport_services'],
                'post_and_courier_services' => $row['post_and_courier_services'],
            ]);

            return $gross_billion;
        } else {
            // If the record does not exist, create a new one
            return new GrossDomesticProductBillion([
                'year' => $row['year'],
                'transportation_and_storage' => $row['transportation_and_storage'],
                'road_transport' => $row['road_transport'],
                'rail_transport_and_pipelines' => $row['rail_transport_and_pipelines'],
                'water_transport' => $row['water_transport'],
                'air_transport' => $row['air_transport'],
                'transport_services' => $row['transport_services'],
                'post_and_courier_services' => $row['post_and_courier_services'],
            ]);
        }
    }
}
