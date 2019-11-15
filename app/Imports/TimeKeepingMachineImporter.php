<?php

namespace App\Imports;

use App\TimeKeepingMachines;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class TimeKeepingMachineImporter implements ToModel, WithChunkReading, WithBatchInserts
{
    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (isset($row[4]) && $row[4] === 'Ngày') {
            return null;
        }
        $date = ExcelDate::excelToDateTimeObject($row[4]);
        $carbon = Carbon::instance($date);
        $checkin_1 = ($row[6] !== '' && isset($row[6])) ? $this->parseTime($row[6]) : null;
        $checkout_1 = ($row[7] !== '' && isset($row[7])) ? $this->parseTime($row[7]) : null;
        $checkin_2 = ($row[8] !== '' && isset($row[8])) ? $this->parseTime($row[8]) : null;
        $checkout_2 = ($row[9] !== '' && isset($row[9])) ? $this->parseTime($row[9]) : null;
        $checkin_3 = ($row[10] !== '' && isset($row[10])) ? $this->parseTime($row[10]) : null;
        $checkout_3 = ($row[11] !== '' && isset($row[11])) ? $this->parseTime($row[11]) : null;

        return new TimeKeepingMachines(['employee_id' => $row[0],
                                        'employee_name' => $row[1],
                                        'checkin_1' => $checkin_1 ? $checkin_1->toTimeString() : null,
                                        'checkout_1' => $checkout_1 ? $checkout_1->toTimeString() : null,
                                        'checkin_2' => $checkin_2 ? $checkin_2->toTimeString() : null,
                                        'checkout_2' => $checkout_2 ? $checkout_2->toTimeString() : null,
                                        'checkin_3' => $checkin_3 ? $checkin_3->toTimeString() : null,
                                        'checkout_3' => $checkout_3 ? $checkout_3->toTimeString() : null,
                                        'date' => $carbon->toDateString()]);
    }

    public function chunkSize(): int
    {
        return 200;
    }

    public function batchSize(): int
    {
        return 200;
    }

    public function parseTime($time)
    {
        return Carbon::parse($time);
    }
}
