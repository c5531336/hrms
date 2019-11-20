<?php

namespace App\Http\Controllers;

use App\Models\EmployeeLevel;
use Illuminate\Http\Request;

class EmployeeLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('EmployeeLevel.index',['data'=>EmployeeLevel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EmployeeLevel.create');
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
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeLevel $employeeLevel)
    {
        return view('EmployeeLevel.show',['data'=>$employeeLevel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeLevel  $employeeLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeLevel $employeeLevel)
    {
        //
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
