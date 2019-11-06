<?php

namespace App\Imports;

use App\TimeKeepingMachine;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class TimeKeepingMachineImporter implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!isset($row[0])) {
            return null;
        }
        if (!isset($row[0])) {
            return null;
        }
        if (!isset($row[0])) {
            return null;
        }
        return new TimeKeepingMachine([
            'employee_id'=>$row[0],
            'employee_name'=>$row[1],
            'date'=>$row[4]
        ]);
    }
}
