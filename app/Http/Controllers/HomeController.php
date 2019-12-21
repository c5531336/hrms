<?php

namespace App\Http\Controllers;

use App\Models\TempSalaryCalculation;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //    public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function index2()
    {
        return view('home2');
    }

    public function index3()
    {
        return view('home3');
    }

    public function testCreateTime()
    {
        /**
         * @TODO cal overtime --ReadyToTest
         * @TODO cal food allowance
         * @TODO cal product
         */
        $month = 9;
        $year=2019;
        $timeMachines = TimeKeepingMachines::with(['Department1','Department2','Department3', 'Branch', 'EmployeeLevel',
                                                   'TimeShift1','TimeShift2','TimeShift3'])
            ->where('Month', $month)
            ->get();

        $timeMachines = $timeMachines->groupBy('EmployeeId');
        $UserTimeKeeping = new Collection();
        $timeMachines->each(function ($timeMachine) use ($UserTimeKeeping,$month,$year) {
            $currentUser = new Collection();
            $workingDays = 0;
            $workingHours = 0;
            $overTimeHours=0;
            $salaryByHours = 0;
            $salaryByOverTime = 0;
            $salaryByMonth = 0;
            $employeeId = 0;
            $foodAllowance=0;
            $workingTimeAllowance=0;
            $departmentAllowance = 0;
            foreach ($timeMachine as $timeRecorded => $item) {
                $absent = false;
                $employeeId = $item->EmployeeId;
                if (!empty($item->checkin_1) && !empty($item->checkout_1)) {
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $item->TimeShift1->StandardWorkingTime-$currentWorkingTime;
                    if($OT>0){
                        $currentWorkingTime = $item->TimeShift1->StandardWorkingTime;
                        $overTimeHours +=$OT;
                    }
                    if($currentWorkingTime>$item->TimeShift1->MinHourForFoodAllowance){
                        $foodAllowance+=$item->TimeShift1->FoodAllowance;
                    }
                    $workingTimeAllowance+=$item->TimeShift1->TimeAllowance;
                    $departmentAllowance+= $item->Department1->Allowance;
                    $workingHours+=$currentWorkingTime;
                } else {
                    $absent = true;
                }
                if (!empty($item->checkin_2) && !empty($item->checkout_2)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_2);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_2));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $item->TimeShift2->StandardWorkingTime-$currentWorkingTime;
                    if($OT>0){
                        $currentWorkingTime = $item->TimeShift2->StandardWorkingTime;
                        $overTimeHours +=$OT;
                    }
                    if($currentWorkingTime>$item->TimeShift2->MinHourForFoodAllowance){
                        $foodAllowance+=$item->TimeShift2->FoodAllowance;
                    }
                    $workingTimeAllowance+=$item->TimeShif2t->TimeAllowance;
                    $departmentAllowance+= $item->Department2->Allowance;
                    $workingHours+=$currentWorkingTime;
                }
                if (!empty($item->checkin_3) && !empty($item->checkout_3)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_3);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_3));
                    $currentWorkingTime = round($time / 60, 1);
                    $OT = $item->TimeShift3->StandardWorkingTime-$currentWorkingTime;
                    if($OT>0){
                        $currentWorkingTime = $item->TimeShift3->StandardWorkingTime;
                        $overTimeHours +=$OT;
                    }
                    if($currentWorkingTime>$item->TimeShift3->MinHourForFoodAllowance){
                        $foodAllowance+=$item->TimeShift3->FoodAllowance;
                    }
                    $workingTimeAllowance+=$item->TimeShift3->TimeAllowance;
                    $departmentAllowance+= $item->Department3->Allowance;
                    $workingHours+=$currentWorkingTime;
                }
                if (!$absent) {
                    ++$workingDays;
                }
                if ($item->EmployeeLevel->BasicSalaryByHour > 0) {
                    $salaryByHours += $workingHours * $item->EmployeeLevel->BasicSalaryByHour;
                    $salaryByOverTime+=$overTimeHours*$item->EmployeeLevel->BasicSalaryByHour *1.5;
                } else {
                    $salaryByMonth += $workingDays * $item->EmployeeLevel->BasicSalaryByMonth;
                }
            }
            $UserTimeKeeping->put($employeeId, ['EmployeeId'    => $employeeId,
                                                'RawSalaryByHours' => $salaryByHours,
                                                'RawSalaryByMonth' => $salaryByMonth,
                                                'RawSalaryByOverTime'=>$salaryByOverTime,
                                                'RawFoodAllowance'=>$foodAllowance,
                                                'RawTimeAllowance'=>$workingTimeAllowance,
                                                'RawDepartmentAllowance'=>$departmentAllowance,
                                                'TotalWorkingDay'    => $workingDays,
                                                'TotalWorkingTime'  => $workingHours,
                                                'TotalOverTime'=>$overTimeHours,
                                                'Month'=>$month,
                                                'Year'=>$year
            ]);
        });
        if ($UserTimeKeeping->count() > 0) {
            TempSalaryCalculation::insert($UserTimeKeeping->toArray());
        }
    }
}
