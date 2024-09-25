<?php

namespace App\Imports;

use App\Models\NatioanalDriversLicenseStates;
use Maatwebsite\Excel\Concerns\ToModel;

class NationalDriversLiceseStatesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NatioanalDriversLicenseStates([
            //
        ]);
    }
}
