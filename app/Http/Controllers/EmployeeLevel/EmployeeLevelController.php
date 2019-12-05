<?php

namespace App\Http\Controllers\EmployeeLevel;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeLevelRequest;
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


    public function store(EmployeeLevelRequest $request)
    {
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
     */
    /**
     * @param EmployeeLevel $request
     * @param EmployeeLevel $employeeLevel
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EmployeeLevelRequest $request, EmployeeLevel $employeeLevel)
    {
        if( $employeeLevel->update($request->all())){
            return redirect()->route('employee-level.index')->with('message',__('Update success'));
        }
        return redirect()->route('employee-level.index')->with('message', __('Update fail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeLevel $employeeLevel)
    {
        if($employeeLevel->delete()){
            return redirect()->route('department.index')->with('message', __('Delete success'));
        }
        return redirect()->route('department.index')->with('message', __('Delete fail'));
    }
}
