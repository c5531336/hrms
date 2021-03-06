<?php

namespace App\Http\Controllers\Branch;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    public function __contruct()
    {
        parent::__contruct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('Branch.index', ['data' => Branch::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Branch.create');
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
        $validator = Validator::make($request->all(), ['BranchCode' => 'required|unique:Branch,BranchCode',
                                                       'Name' => 'required'], ['BranchCode.required' => 'Cần phải nhập mã chi nhánh',
                                                                               'BranchCode.unique' => 'Mã Chi nhánh đã tồn tại',
                                                                               'Name.required' => 'Cần phải nhập tên chi nhánh']);
        if ($validator->fails()) {
            return redirect()->route('branch.create')->withErrors($validator)->withInput();
        }
        if (Branch::create($request->all())) {
            return redirect()->route('branch.index')->with('message', 'Tạo Chi nhánh thành công !!!');
        }
        return redirect()->route('branch.index')->with('message', 'Tạo Chi nhánh thất bại !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Branch $branch
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Branch $branch
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('Branch.edit', ['branch' => $branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Branch       $branch
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $validator = Validator::make($request->all(), ['BranchCode' => 'required',
                                                       'Name' => 'required'], ['BranchCode.required' => 'Cần phải nhập mã chi nhánh',
                                                                               'BranchCode.unique' => 'Mã Chi nhánh đã tồn tại',
                                                                               'Name.required' => 'Cần phải nhập tên chi nhánh']);
        if ($validator->fails()) {
            return redirect()->route('branch.create')->withErrors($validator)->withInput();
        }
        $branch->BranchCode=$request->BranchCode;
        $branch->Name=$request->Name;
        if($branch->save()){
            return redirect()->route('branch.index')->with('message', 'Sửa Chi nhánh thành công !!!');
        }
        return redirect()->route('branch.index')->with('message', 'Sửa Chi nhánh thất bại !!!');
    }

    /**
     * @param Branch $branch
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Branch $branch)
    {
        //TODO: check branch if has data
        if($branch->TimeShift || $branch->EmployeeLevel || $branch->TimeShift){
            return redirect()->route('branch.index')->with('errors', __('This branch has dependencies!!'));
        }
        $branch->delete();
        return redirect()->route('branch.index')->with('message', 'Xóa Chi nhánh thành công !!!');
    }
}
