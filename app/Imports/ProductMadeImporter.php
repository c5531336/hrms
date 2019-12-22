<?php

namespace App\Imports;

use App\Models\EmployeeProductMade;
use App\Models\ProductCategory;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class ProductMadeImporter implements ToCollection, WithChunkReading, WithBatchInserts
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
        /**
         * ,[EmployeeId] 0
         * ,[Date]1
         * ,[Month]2
         * ,[Year]3
         * ,[ProductCode]4
         * ,[ProductAmount]5
         */
        $year = Carbon::now()->year;
        $Product = ProductCategory::all();
        $ProductMade = new Collection();
        foreach ($dataSet as $key => $row) {
            if (empty($row[4]) || empty($row[5]) || strpos($row[4], 'Ngày') !== false || strpos($row[4], 'Ngày') === 0) {
                continue;
            }
            if (!is_string($row[1])) {
                $date = ExcelDate::excelToDateTimeObject($row[4]);
                $carbon = Carbon::instance($date);
            } else {
                $carbon = Carbon::createFromFormat('d/m/Y', $row[1]);
            }
            if ((int)$this->Month !== $carbon->month) {
                continue;
            }
            /**
             * change to collection
             */
            $productId = $Product->where('ProductCode',trim($row[4]))->first();
            if(empty($productId)){
                continue;
            }
            $importedData = [
                'EmployeeId' => $row[0],
                'date' => $carbon->toDateString(),
                'Month' => $this->Month,
                'Year' => $carbon->year,
                'ProductCategoryId'=>$productId->ProductCategoryId,
                'ProductAmount'=>$row[5]
            ];
            $ProductMade->push($importedData);
        }

        return EmployeeProductMade::insert($ProductMade->toArray());
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
