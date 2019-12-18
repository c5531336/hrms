<?php

namespace App\Http\Controllers;

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
         * @TODO Mapping Timekeeping table to required table to calculate all thing for salary/timeKeeping Table on Interger
         * @TODO All calculated value must be base on Money cause of too many department and product that Employees worked and made
         */
        $month = 9;
        $timeMachines = TimeKeepingMachines::with(['Department','Branch','EmployeeLevel','TimeShift'])->where('Month',$month)->limit(5)->get();
        dd($timeMachines);
        $timeMachines = $timeMachines->groupBy('EmployeeId');
        $UserTimeKeeping = new Collection();
        $timeMachines->each(function ($timeMachine) use ($UserTimeKeeping) {
            $currentUser = new Collection();
            $maxMonth = $timeMachine->max('date')->month;
            $maxYear = $timeMachine->max('date')->year;
            foreach ($timeMachine as $timeRecorded => $item) {
                if (isset($currentUser['Month'], $currentUser['Year']) && ($currentUser['Month'] !== $item->date->month || $currentUser['Month'] <= $maxMonth + 1)) {
                    $UserTimeKeeping->put($currentUser['EmployeeId'] . '-' . $currentUser['Month'], $currentUser->toArray());
                }
                $currentProduct['Month'] = $currentUser['Month'] = $item->date->month;
                $currentProduct['Year'] = $currentUser['Year'] = $item->date->year;
                $currentProduct['EmployeeId'] = $currentUser['EmployeeId'] = $item->EmployeeId;
                $absent = false;
                if (!isset($currentUser['TotalWorkingTime'])) {
                    $currentUser['TotalWorkingTime'] = 0;
                }
                if (!isset($currentUser['TotalAbsentDays'])) {
                    $currentUser['TotalAbsentDays'] = 0;
                }
                if ($item->checkin_1 && $item->checkout_1) {
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $currentUser['TotalWorkingTime'] += round($time / 60, 1);
                } else {
                    $absent = true;
                }
                if ($item->checkin_2 && $item->checkout_2) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $currentUser['TotalWorkingTime'] += round($time / 60, 1);
                }
                if ($item->checkin_3 && $item->checkout_3) {
                    if ($absent) {
                        $absent = false;
                    }
                    $checkin = Carbon::createFromFormat('H:i:s', $item->checkin_1);
                    $time = $checkin->diffInMinutes(Carbon::createFromFormat('H:i:s', $item->checkout_1));
                    $currentUser['TotalWorkingTime'] += round($time / 60, 1);
                }
                if ($absent) {
                    $currentUser['TotalAbsentDays'] += 1;
                }
            }
        });
        if ($UserTimeKeeping->count() > 0) {
            dd($UserTimeKeeping);
        }
    }
}
