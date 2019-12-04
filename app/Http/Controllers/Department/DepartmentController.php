<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Department;
use App\Repositories\DepartmentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    private $department;


    public function index()
    {
        $parentData = Department::with('belongedBranch')->get();
        $childrenData = Department::with([
                                             'belongedDepartment',
                                             'belongedBranch'
                                         ])->get();
        return view('Department.index', [
            'departments'         => $parentData,
            'childrenDepartments' => $childrenData
        ]);
    }


    public function create()
    {
        $parents = Department::where('ParentDepartmentId', 0)->get();
        $branches = Branch::all();
        return view('Department.create', [
            'parents'  => $parents,
            'branches' => $branches
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'BranchId'       => 'required',
            'DepartmentCode' => 'required|unique:Department,DepartmentCode',
            'Name'           => 'required',
            'Allowance'      => Rule::requiredIf((int)$request->ParentDepartmentId !== 0)
        ], [
                                         'DepartmentCode.required' => 'Cần phải nhập Mã Phòng ban',
                                         'DepartmentCode.unique'   => 'Mã Phòng ban đã tồn tại',
                                         'Name.required'           => 'Cần phải nhập tên Phòng ban ',
                                         'Allowance.required'      => 'Cần phải nhập trợ cấp'
                                     ]);
        if ($validator->fails()) {
            return redirect()->route('department.create')->withErrors($validator)->withInput();
        }
        $data = $request->all();
        if ((int)$request->ParentDepartmentId === 0) {
            $data['Allowance'] = 0;
        }
        if (Department::create($data)) {
            return redirect()->route('department.index')->with('message', 'Tạo Phòng ban thành công !!!');
        }
        return redirect()->route('department.index')->with('message', 'Tạo Phòng ban thất bại !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Department $department
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Department $department
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $parents = Department::where('ParentDepartmentId', 0)->get();
        $branches = Branch::all();
        return view('Department.edit', [
            'parents'    => $parents,
            'branches'   => $branches,
            'department' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Department   $department
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $validator = Validator::make($request->all(), [
            'BranchId'       => 'required',
            'DepartmentCode' => 'required',
            'Name'           => 'required',
            'Allowance'      => Rule::requiredIf((int)$request->ParentDepartmentId !== 0)
        ], [
                                         'DepartmentCode.required' => 'Cần phải nhập Mã Phòng ban',
                                         'DepartmentCode.unique'   => 'Mã Phòng ban đã tồn tại',
                                         'Name.required'           => 'Cần phải nhập tên Phòng ban ',
                                         'Allowance.required'      => 'Cần phải nhập trợ cấp'
                                     ]);
        if ($validator->fails()) {
            return redirect()->route('department.edit')->withErrors($validator)->withInput();
        }
        if ($department->update($request->all())) {
            return redirect()->route('department.edit')->with('message', 'Tạo Phòng ban thành công !!!');
        }
        return redirect()->route('department.edit')->with('message', 'Tạo Phòng ban thất bại !!!');
    }

    /**
     * @param Department $department
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Department $department)
    {
        if ($department->hasDependDepartments->count() > 0) {
            return redirect()->route('department.index')->with('error-message', 'Phòng ban muốn xóa có tổ phụ thuộc!!!');
        }
        $department->delete();
        return redirect()->route('department.index')->with('message', 'Xóa Chi nhánh thành công !!!');
    }
}
