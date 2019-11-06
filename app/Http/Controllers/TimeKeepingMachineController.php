<?php

namespace App\Http\Controllers;

use App\Imports\TimeKeepingMachineImporter;
use App\TimeKeepingMachines;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Carbon\Carbon;
class TimeKeepingMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\TimeKeepingMachine $timeKeepingMachine
     *
     * @return \Illuminate\Http\Response
     */
    public function show(TimeKeepingMachine $timeKeepingMachine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\TimeKeepingMachine $timeKeepingMachine
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeKeepingMachine $timeKeepingMachine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\TimeKeepingMachine  $timeKeepingMachine
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeKeepingMachine $timeKeepingMachine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\TimeKeepingMachine $timeKeepingMachine
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeKeepingMachine $timeKeepingMachine)
    {
        //
    }

    /*
     * importer
     */
    public function import(Request $request)
    {
//        $path = $request->file('file')->storeAs(
//            'test',$request->file->getClientOriginalName()
//        );


        $path = $request->file('file')->store('test');
        Excel::import(new TimeKeepingMachineImporter,$path);
        return back();
    }

    public function importView()
    {
        return view('TimeKeepingMachine/index');
    }
}
