<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\EmployeeLevelImporter;
use App\Imports\TimeKeepingMachineImporter;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ImporterController extends Controller
{
    //
    public function index()
    {
        return view('Importer.index');
    }

    public function ImportTimeKeepingMachine(Request $request)
    {
        //TODO: validate request before import
        $Month = (int)$request->Month;
        $Year = Carbon::now()->year;
        TimeKeepingMachines::where('Month',$Month)->where('Year',$Year)->delete();
        $path = Storage::putFile('importedFile', $request->file('file'));
        $result = Excel::import(new TimeKeepingMachineImporter($request->Month), $path);
        return redirect()->route('Importer.index')->with('message', __('Import Time Keeping Success!'));
    }

    public function ImportEmployeeLevel(Request $request)
    {
        $path = Storage::putFile('importedFile', $request->file('file'));
        Excel::import(new EmployeeLevelImporter(), $path);
        return back();
    }
}
