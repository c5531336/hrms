<?php

namespace App\Http\Controllers\EmployeeLevel;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\EmployeeLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        return view('EmployeeLevel.index',['EmployeeLevels'=>EmployeeLevel::with(['belongedBranch'])->get()]);
    }


    public function create()
    {
        $branches = Branch::all();
        return view('EmployeeLevel.create',['branches'=>$branches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'BasicSalary'=>'required',
            'Level'=>'required',
            'BasicSalaryRate'=>'nullable',
            'BasicFoodAllowance'=>'required',
            'BasicFuelAllowance'=>'required',
            'BasicHouseholdAllowance'=>'required',
            'BasicAllowanceRate'=>'nullable',
            'BasicPhoneAllowance'=>'required',
            'BasicResponseAllowance'=>'required',
            'Code'       =>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('employee-level.create')->withErrors($validator)->withInput();
        }
        if(EmployeeLevel::create($request->all())){
            return redirect()->route('employee-level.index')->with('message', 'Tạo bậc lương thành công !!!');
        }
        return redirect()->route('employee-level.index')->with('message', 'Tạo bậc lương thất bại !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return mixed
     */
    public function show(EmployeeLevel $employeeLevel)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return mixed
     */
    public function edit(EmployeeLevel $employeeLevel)
    {
        $branches = Branch::all();
        return view('EmployeeLevel.edit',['branches'=>$branches,'employeeLevel'=>$employeeLevel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeLevel $employeeLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeLevel $employeeLevel)
    {
        //
    }
}
