<?php

namespace App\Imports;

use App\Models\EmployeeLevel;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeeLevelImporter implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EmployeeLevel([
            //
        ]);
    }
}
