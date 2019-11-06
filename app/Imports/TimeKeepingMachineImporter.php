<?php

namespace App\Imports;

use App\TimeKeepingMachines;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class TimeKeepingMachineImporter implements ToModel,WithChunkReading,WithBatchInserts
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (isset($row[4]) && $row[4]==='Ngày') {
            return null;
        }
        $date= ExcelDate::excelToDateTimeObject($row[4]);
        $carbon = Carbon::instance($date);
        return new TimeKeepingMachines([
            'employee_id'=>$row[0],
            'employee_name'=>$row[1],
            'date'=>$carbon->toDateString()
        ]);
    }
    public function chunkSize(): int
    {
        return 200;
    }
    public function batchSize(): int
    {
        return 200;
    }
}
