<?php

namespace App\Http\Controllers\TimeKeepingMachine;

use App\Http\Controllers\Controller;
use App\Models\Employees;
use App\Models\TempSalaryCalculation;
use App\Models\TimeKeepingMachines;
use Illuminate\Http\Request;

class TimeKeepingMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = TempSalaryCalculation::with( ['Employee.Department'])->orderBy('EmployeeId','ASC')->get();
       return view('TimeKeeping.index',['EmployeeTimeKeepingSummaries'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeKeepingMachines  $timeKeepingMachines
     * @return \Illuminate\Http\Response
     */
    public function show($EmployeeId)
    {

        /**
         * @TODO create relation data with EmployeeTable
         * @TODO Highlight Not complete checkin/checkout data
         *       Show more detail information of Time Keeping maching
         *      Format view for more beautiful
         */
        $employeeInfo = Employees::find($EmployeeId);
        $data= TimeKeepingMachines::with([
            'Department1',
            'Department2',
            'Department3',
            'Branch',
            'EmployeeLevel',
            'TimeShift1',
            'TimeShift2',
            'TimeShift3',
        ])->where('EmployeeId',$EmployeeId)->get();
        return view('TimeKeeping.show',['EmployeeDetails'=>$data,'EmployeeInfo'=>$employeeInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeKeepingMachines  $timeKeepingMachines
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeKeepingMachines $timeKeepingMachines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeKeepingMachines  $timeKeepingMachines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeKeepingMachines $timeKeepingMachines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeKeepingMachines  $timeKeepingMachines
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeKeepingMachines $timeKeepingMachines)
    {
        //
    }
}
