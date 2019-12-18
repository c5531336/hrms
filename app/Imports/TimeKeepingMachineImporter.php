<?php

namespace App\Imports;

use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class TimeKeepingMachineImporter implements ToCollection, WithChunkReading, WithBatchInserts
{
    use Importable;
    protected $Month;

    public function __construct($month)
    {
        $this->Month = $month;
    }

    /**
     * @param array $row
     *
     * @throws \Exception
     */
    public function collection(Collection $dataSet)
    {
        $year = Carbon::now()->year;

        $TimeKeepingMachines = new Collection();
        foreach ($dataSet as $key => $row) {
            if (empty($row[4]) || empty($row[5]) || strpos($row[4], 'Ngày') !== false || strpos($row[4], 'Ngày') === 0) {
                continue;
            }
            if (!is_string($row[4])) {
                $date = ExcelDate::excelToDateTimeObject($row[4]);
                $carbon = Carbon::instance($date);
            } else {
                $carbon = Carbon::createFromFormat('d/m/Y', $row[4]);
            }
            $checkin_1 = ($row[6] !== '' && !empty($row[6])) ? $this->parseTime($row[6]) : null;
            $checkout_1 = ($row[7] !== '' && !empty($row[7])) ? $this->parseTime($row[7]) : null;
            $checkin_2 = ($row[8] !== '' && !empty($row[8])) ? $this->parseTime($row[8]) : null;
            $checkout_2 = ($row[9] !== '' && !empty($row[9])) ? $this->parseTime($row[9]) : null;
            $checkin_3 = ($row[10] !== '' && !empty($row[10])) ? $this->parseTime($row[10]) : null;
            $checkout_3 = ($row[11] !== '' && !empty($row[11])) ? $this->parseTime($row[11]) : null;
            if((int)$this->Month !== $carbon->month){
                continue;
            }
            /**
             * change to collection
             */ //
            /* return new TimeKeepingMachines(['employee_id' => $row[0],
                                             'employee_name' => $row[1],
                                             'checkin_1' => $checkin_1 ? $checkin_1->toTimeString() : null,
                                             'checkout_1' => $checkout_1 ? $checkout_1->toTimeString() : null,
                                             'checkin_2' => $checkin_2 ? $checkin_2->toTimeString() : null,
                                             'checkout_2' => $checkout_2 ? $checkout_2->toTimeString() : null,
                                             'checkin_3' => $checkin_3 ? $checkin_3->toTimeString() : null,
                                             'checkout_3' => $checkout_3 ? $checkout_3->toTimeString() : null,
                                             'date' => $carbon->toDateString()]);*/
            $importedData = [
                'EmployeeId'   => $row[0],
                'EmployeeFullName' => $row[1],
                'checkin_1'    => $checkin_1 ? $checkin_1->toTimeString() : null,
                'checkout_1'   => $checkout_1 ? $checkout_1->toTimeString() : null,
                'checkin_2'    => $checkin_2 ? $checkin_2->toTimeString() : null,
                'checkout_2'   => $checkout_2 ? $checkout_2->toTimeString() : null,
                'checkin_3'    => $checkin_3 ? $checkin_3->toTimeString() : null,
                'checkout_3'   => $checkout_3 ? $checkout_3->toTimeString() : null,
                'date'         => $carbon->toDateString(),
                'Month'        => $this->Month,
                'Year'        => $carbon->year,
            ];
            $TimeKeepingMachines->push($importedData);
        }
        return TimeKeepingMachines::insert($TimeKeepingMachines->toArray());
    }

    public function parseTime($time)
    {
        return Carbon::parse($time);
    }

    public function model(array $row)
    {

    }

    public function chunkSize(): int
    {
        return 300;
    }

    public function batchSize(): int
    {
        return 300;
    }
}
