<?php

namespace App\Imports;

use App\Models\GrossDomesticProductPercent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GrossDomesticProductPercentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)


    {
 // Check if a record with the given ID already exists
 $gross_percent = GrossDomesticProductPercent::find($row['id']);

 if ($gross_percent) {
     // If the record exists, update it
     $gross_percent->update([
         'year'  => $row['year'],
                'road_transport' => $row['road_transport'],
                'rail_transport_and_pipelines' => $row['rail_transport_and_pipelines'],
                'water_transport' => $row['water_transport'],
                'air_transport' => $row['air_transport'],
                'transport_services' => $row['transport_services'],
                'post_and_courier_services' => $row['post_and_courier_services'],
                'total' => $row['total'],
     ]);

     return $gross_percent;
 } else {
     // If the record does not exist, create a new one
     return new GrossDomesticProductPercent([
         'id' => $row['id'], // Use the ID from the spreadsheet
         'year'  => $row['year'],
                'road_transport' => $row['road_transport'],
                'rail_transport_and_pipelines' => $row['rail_transport_and_pipelines'],
                'water_transport' => $row['water_transport'],
                'air_transport' => $row['air_transport'],
                'transport_services' => $row['transport_services'],
                'post_and_courier_services' => $row['post_and_courier_services'],
                'total' => $row['total'],
     ]);
 }
}
}
