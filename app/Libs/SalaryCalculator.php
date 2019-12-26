<?php

namespace App\Libs;

use App\Models\EmployeeProductMade;
use App\Models\TempSalaryCalculation;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class SalaryCalculator
{
    public static function SalaryByHoursCalculator(): bool
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
                if (!empty($item->checkin_1) && !empty($item->checkout_1)) {

                    $checkin = Carbon::parse($item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::parse( $item->checkout_1));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $currentWorkingTime - $item->TimeShift1->StandardWorkingTime;
                    if ($OT > 0 && $item->TimeShift1->AllowOverTime === 0) {
                        $currentWorkingTime = $item->TimeShift1->StandardWorkingTime;
                        $overTimeHours += $OT;
                    }
                    if ($currentWorkingTime > $item->TimeShift1->MinHourForFoodAllowance) {
                        $foodAllowance += $item->TimeShift1->FoodAllowance;
                    }
                    $workingTimeAllowance += $item->TimeShift1->TimeAllowance;
                    $departmentAllowance += $item->Department1->Allowance;
                    if ($checkin->englishDayOfWeek === 'Sunday' && $item->EmployeeLevel->AllowOverTime === 0 && $item->TimeShift1->IsOTSunday === 0) {
                        $overTimeSunday += $currentWorkingTime;
                        $currentWorkingTime = 0;
                    }
                    $workingHours += $currentWorkingTime;
                    $dayWorkingTime+=$currentWorkingTime;
                } else {
                    $absent = true;
                }
                if (!empty($item->checkin_2) && !empty($item->checkout_2)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::parse( $item->checkin_2);
                    $time = $checkin->diffInMinutes(Carbon::parse( $item->checkout_2));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $currentWorkingTime - $item->TimeShift1->StandardWorkingTime;
                    if ($OT > 0 && $item->TimeShift2->AllowOverTime === 0) {
                        $currentWorkingTime = $item->TimeShift2->StandardWorkingTime;
                        $overTimeHours += $OT;
                    }
                    if ($currentWorkingTime > $item->TimeShift2->MinHourForFoodAllowance) {
                        $foodAllowance += $item->TimeShift2->FoodAllowance;
                    }
                    $workingTimeAllowance += $item->TimeShift2->TimeAllowance;
                    $departmentAllowance += $item->Department2->Allowance;
                    if ($checkin->englishDayOfWeek === 'Sunday' && $item->EmployeeLevel->AllowOverTime === 0 && $item->TimeShift2->IsOTSunday === 0) {
                        $overTimeSunday += $currentWorkingTime;
                        $currentWorkingTime = 0;
                    }
                    $workingHours += $currentWorkingTime;
                    $dayWorkingTime+=$currentWorkingTime;
                }
                if (!empty($item->checkin_3) && !empty($item->checkout_3)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::parse($item->checkin_3);
                    $time = $checkin->diffInMinutes(Carbon::parse($item->checkout_3));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $currentWorkingTime - $item->TimeShift1->StandardWorkingTime;
                    if ($OT > 0 && $item->TimeShift3->AllowOverTime === 0) {
                        $currentWorkingTime = $item->TimeShift3->StandardWorkingTime;
                        $overTimeHours += $OT;
                    }
                    if ($currentWorkingTime > $item->TimeShift3->MinHourForFoodAllowance) {
                        $foodAllowance += $item->TimeShift3->FoodAllowance;
                    }
                    $workingTimeAllowance += $item->TimeShift3->TimeAllowance;
                    $departmentAllowance += $item->Department3->Allowance;
                    if ($checkin->englishDayOfWeek === 'Sunday' && $item->EmployeeLevel->AllowOverTime === 0 && $item->TimeShift3->IsOTSunday === 0) {
                        $overTimeSunday += $currentWorkingTime;
                        $currentWorkingTime = 0;
                    }
                    $workingHours += $currentWorkingTime;
                    $dayWorkingTime+=$currentWorkingTime;
                }
                if (!$absent) {
                    ++$workingDays;
                }
                if ($item->EmployeeLevel->BasicSalaryByHour > 0) {
                    $salaryByHours += $dayWorkingTime * $item->EmployeeLevel->BasicSalaryByHour;
                    $salaryByOverTime += $overTimeHours * $item->EmployeeLevel->BasicSalaryByHour * 1.5;
                } else {
                    $salaryByMonth += $workingDays * $item->EmployeeLevel->BasicSalaryByMonth;
                }
                if($item->EmployeeLevel->AllowOverTime === 0){
                    $salaryByOverTimeSunday = $overTimeSunday * $item->EmployeeLevel->BasicSalaryByHour * 2;
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
