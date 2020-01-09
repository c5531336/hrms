<?php

namespace App\Libs;

use App\Models\EmployeeProductMade;
use App\Models\TempSalaryCalculation;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class SalaryCalculator
{
    public static function SalaryByHoursCalculator($month = null, $year = null): bool
    {
        /**
         * @TODO cal overtime --ReadyToTest
         *       cal food allowance --Ready
         *       Cal OT on sunday if this time shift OT is occur on sunday --Ready
         *
         * @TODO cal product
         */
        $month = 9;
        $year = 2019;
        $timeMachines = TimeKeepingMachines::with([
                                                      'Department1',
                                                      'Department2',
                                                      'Department3',
                                                      'Branch',
                                                      'EmployeeLevel',
                                                      'Employee',
                                                      'TimeShift1',
                                                      'TimeShift2',
                                                      'TimeShift3',
                                                  ])->where('Month', $month)->get();

        $timeMachines = $timeMachines->groupBy('EmployeeId');
        $UserTimeKeeping = new Collection();
        $timeMachines->each(static function ($timeMachine) use ($UserTimeKeeping, $month, $year) {
            $currentUser = new Collection();
            $workingDays = 0;
            $workingHours = 0;
            $overTimeHours = 0;
            $overTimeSunday = 0;
            $salaryByHours = 0;
            $salaryByOverTime = 0;
            $salaryByOverTimeSunday = 0;
            $salaryByMonth = 0;
            $employeeId = 0;
            $foodAllowance = 0;
            $workingTimeAllowance = 0;
            $departmentAllowance = 0;
            foreach ($timeMachine as $timeRecorded => $item) {
                $absent = false;
                $employeeId = $item->EmployeeId;
                $dayWorkingTime = 0;
                for($i=1;$i<=3;$i++){
                    if (!empty($item->{'checkin_'.$i}) && !empty($item->{'checkout_'.$i})) {
                        $checkin = Carbon::parse($item->{'checkin_'.$i});
                        $time = $checkin->diffInMinutes(Carbon::parse( $item->{'checkout_'.$i}));
                        $currentWorkingTime = round($time / 60, 1);
                        $OT = $currentWorkingTime - ($item->{'TimeShift' . $i}->StandardWorkingTime ?? 6.0);
                        if (isset($item->Employee->AllowOverTime)&&($OT > 0 && $item->Employee->AllowOverTime === 1)) {
                            $currentWorkingTime = $item->{'TimeShift'.$i}->StandardWorkingTime??8.0;
                            $overTimeHours += $OT;
                        }
                        if ($currentWorkingTime > ($item->{'TimeShift'.$i}->MinHourForFoodAllowance??8.0)) {
                            $foodAllowance += $item->{'TimeShift'.$i}->FoodAllowance??0;
                        }
                        $workingTimeAllowance += $item->{'TimeShift'.$i}->TimeAllowance??0;
                        $departmentAllowance += $item->{'Department'.$i}->Allowance??0;
                        if($item->Employee->AllowOverTime && $item->{'TimeShift'.$i}->IsOTSunday){
                            if ($checkin->englishDayOfWeek === 'Sunday' && $item->EmployeeLevel->AllowOverTime === 1 && $item->{'TimeShift'.$i}->IsOTSunday === 0) {
                                $overTimeSunday += $currentWorkingTime;
                                $currentWorkingTime = 0;
                            }
                        }
                        $workingHours += $currentWorkingTime-1;
                        $dayWorkingTime+=$currentWorkingTime;
                    } else {
                        $absent = true;
                    }
                }

                if (!$absent) {
                    ++$workingDays;
                }
                if ($item->EmployeeLevel->BasicSalaryByHour > 0) {
                    $salaryByHours += $dayWorkingTime * $item->EmployeeLevel->BasicSalaryByHour??0.0;
                    $salaryByOverTime += $overTimeHours * $item->EmployeeLevel->BasicSalaryByHour??0.0 * 1.5;
                } else {
                    $salaryByMonth += $workingDays * $item->EmployeeLevel->BasicSalaryByMonth??0.0;
                }
                if($item->EmployeeLevel->AllowOverTime === 0){
                    $salaryByOverTimeSunday = $overTimeSunday * $item->EmployeeLevel->BasicSalaryByHour??0.0 * 2;
                    $salaryByOverTime+=$salaryByOverTimeSunday;
                }
            }

            $UserTimeKeeping->put($employeeId, [
                'EmployeeId'             => $employeeId,
                'RawSalaryByHours'       => $salaryByHours,
                'RawSalaryByMonth'       => $salaryByMonth,
                'RawSalaryByOverTime'    => $salaryByOverTime,
                'RawFoodAllowance'       => $foodAllowance,
                'RawTimeAllowance'       => $workingTimeAllowance,
                'RawDepartmentAllowance' => $departmentAllowance,
                'TotalWorkingDay'        => $workingDays,
                'TotalWorkingTime'       => (float)$workingHours,
                'TotalOverTime'          => (float)$overTimeHours,
                'Month'                  => $month,
                'Year'                   => $year,
            ]);
        });
        if ($UserTimeKeeping->count() > 0) {
            TempSalaryCalculation::where('Month', $month)->where('Year', $year)->delete();
            TempSalaryCalculation::insert($UserTimeKeeping->toArray());
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */

    public static function SalaryByProductCalculator(): bool
    {
        $month = 9;
        $year = 2019;
        $productsMade = EmployeeProductMade::with(['ProductCategory', 'Employee'])
            ->where('Month', $month)
            ->where('Year', $year)
            ->get();

        $userMadeProducts = new Collection();
        $productsMade = $productsMade->groupBy('EmployeeId');
        $productsMade->each(static function ($productMade) use ($userMadeProducts, $month, $year) {
            $TotalProductSalary = 0;
            $TotalMadeProduct = 0;
            $EmployeeId = 0;
            foreach ($productMade as $key => $product) {
                $TotalProductSalary += $product->ProductCategory->Price * $product->ProductAmount;
                $TotalMadeProduct += $product->ProductAmount;
                $EmployeeId = $product->EmployeeId;
            }
            $userMadeProducts->put($EmployeeId, [
                'EmployeeId'         => $EmployeeId,
                'Month'              => $month,
                'Year'               => $year,
                'TotalProductSalary' => $TotalProductSalary,
                'TotalMadeProduct'   => $TotalMadeProduct,
            ]);
        });
        $userMadeProducts->each(static function ($userMadeProduct) {
            TempSalaryCalculation::updateOrInsert([
                                                      'EmployeeId' => $userMadeProduct['EmployeeId'],
                                                      'Month'      => $userMadeProduct['Month'],
                                                      'Year'       => $userMadeProduct['Year'],
                                                  ], ['TotalProductSalary' => $userMadeProduct['TotalProductSalary']]);
        });
        return true;
    }

}
