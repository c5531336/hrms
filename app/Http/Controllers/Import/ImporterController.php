<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\EmployeeLevelImporter;
use App\Imports\TimeKeepingMachineImporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ImporterController extends Controller
{
    //
    public function index(){
        return view('Importer.index');
    }
    public function ImportTimeKeepingMachine(Request $request){
        $path = Storage::putFile('importedFile', $request->file('file'));
        Excel::import(new TimeKeepingMachineImporter(),$path);
        return back();
    }
    public function ImportEmployeeLevel(Request $request){
        $path = Storage::putFile('importedFile', $request->file('file'));
        Excel::import(new EmployeeLevelImporter(),$path);
        return back();
    }
}