<?php

namespace App\Imports;

use App\Models\CausativeFactor2020;
use Maatwebsite\Excel\Concerns\ToModel;

class CausativeFactor2020Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CausativeFactor2020([
            //
        ]);
    }
}
