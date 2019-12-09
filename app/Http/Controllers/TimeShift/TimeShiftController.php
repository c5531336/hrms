<?php

namespace App\Http\Controllers\TimeShift;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimeShiftRequest;
use App\Models\Branch;
use App\Models\TimeShift;
use Illuminate\Http\Request;

class TimeShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $timeShift = TimeShift::with('Branch')->get();
        return view('TimeShift.index', ['TimeShifts'=>$timeShift]);

    }

    public function create()
    {  $branch = Branch::all('Name','BranchId');
        return view('TimeShift.create',['branches'=>$branch]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(TimeShiftRequest $request)
    {
        if (TimeShift::create($request->all())) {
            return redirect()->route('time-shift.index')->with('message', __('Create Success!'));
        }
        return redirect()->route('time-shift.index')->with('message', __('Create fail!'));
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
     */
    public function edit(TimeShift $timeShift)
    {
        $branch = Branch::all('Name','BranchId');
        return view('TimeShift.edit',['TimeShift'=>$timeShift,'branches'=>$branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeShift  $timeShift
     */
    public function update(TimeShiftRequest $request, TimeShift $timeShift)
    {
        if ($timeShift->update($request->all())) {
            return redirect()->route('time-shift.index')->with('message', __('Update Success!'));
        }
        return redirect()->route('time-shift.index')->with('message', __('Update Fails!'));
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
