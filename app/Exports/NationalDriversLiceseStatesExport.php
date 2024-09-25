<?php

namespace App\Exports;

use App\Models\NatioanalDriversLicenseStates;
use Maatwebsite\Excel\Concerns\FromCollection;

class NationalDriversLiceseStatesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NatioanalDriversLicenseStates::all();
    }
}
