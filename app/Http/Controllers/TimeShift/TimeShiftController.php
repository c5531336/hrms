<?php

namespace App\Http\Controllers\TimeShift;

use App\Http\Controllers\Controller;
use App\Models\TimeShift;
use Illuminate\Http\Request;

class TimeShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TimeShift.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TimeShift.index');
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
     * @param  \App\Models\TimeShift  $timeShift
     * @return \Illuminate\Http\Response
     */
    public function show(TimeShift $timeShift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeShift  $timeShift
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeShift $timeShift)
    {
        return view('TimeShift.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeShift  $timeShift
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TimeShift $timeShift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeShift  $timeShift
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeShift $timeShift)
    {
        //
    }
}
