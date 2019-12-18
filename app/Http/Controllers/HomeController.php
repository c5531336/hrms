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
         * @TODO cal overtime
         * @TODO cal food allowance
         * @TODO cal product
         */
        $month = 9;
        $year=2019;
        $timeMachines = TimeKeepingMachines::with(['Department', 'Branch', 'EmployeeLevel', 'TimeShift'])
            ->where('Month', $month)
            ->get();

        $timeMachines = $timeMachines->groupBy('EmployeeId');
        $UserTimeKeeping = new Collection();
        $timeMachines->each(function ($timeMachine) use ($UserTimeKeeping,$month,$year) {
            $currentUser = new Collection();
            $workingDays = 0;
            $workingHours = 0;
            $salaryByHours = 0;
            $salaryByMonth = 0;
            $employeeId = 0;
            $foodAllowance=0;
            $timeAllownace=0;
            foreach ($timeMachine as $timeRecorded => $item) {
                $absent = false;
                $employeeId = $item->EmployeeId;
                if (!empty($item->checkin_1) && !empty($item->checkout_1)) {
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $workingHours += round($time / 60, 1);
                } else {
                    $absent = true;
                }
                if (!empty($item->checkin_2) && !empty($item->checkout_2)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $workingHours += round($time / 60, 1);
                }
                if (!empty($item->checkin_3) && !empty($item->checkout_3)) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $workingHours += round($time / 60, 1);
                }
                if (!$absent) {
                    ++$workingDays;
                }
                if ($item->EmployeeLevel->BasicSalaryByHour > 0) {
                    $salaryByHours += $workingHours * $item->EmployeeLevel->BasicSalaryByHour;
                } else {
                    $salaryByMonth += $workingDays * $item->EmployeeLevel->BasicSalaryByMonth;
                }
            }
            $UserTimeKeeping->put($employeeId, ['EmployeeId'    => $employeeId,
                                                'RawSalaryByHours' => $salaryByHours,
                                                'RawSalaryByMonth' => $salaryByMonth,
                                                'TotalWorkingDay'    => $workingDays,
                                                'TotalWorkingTime'  => $workingHours,
                                                'Month'=>$month,
                                                'Year'=>$year
            ]);
        });
        if ($UserTimeKeeping->count() > 0) {
            TempSalaryCalculation::insert($UserTimeKeeping->toArray());
        }
    }
}
