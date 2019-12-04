
@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!--Open Row-->
                <div class="row">
                    <div class="card bg-light mt-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    Danh sách bậc lương công nhân
                                </div>
                                <div class="col-md-3">
                                    <a name="" id="" class="btn btn-success"
                                       href="{{route('employee-level.create')}}" role="button">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--Open Table-->
                            <table id="EmployeeLevels" class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>Chi Nhánh</th>
                                    <th>Tên Chi Nhánh</th>
                                    <th>bậc lương</th>
                                    <th>mã bậc lương</th>
                                    <th>lương căn bản</th>
                                    <th>Trợ cấp cơm </th>
                                    <th>Trợ cấp xăng</th>
                                    <th>Trợ cấp nhà </th>
                                    <th>Trợ cấp điện thoại</th>
                                    <th>Trợ cấp trách nhiệm </th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($EmployeeLevels as $EmployeeLevel)
                                    <tr>
                                        <td>{{$EmployeeLevel->belongedBranch->Name}}</td>
                                        <td>{{$EmployeeLevel->Name}}</td>
                                        <td>{{$EmployeeLevel->Level}}</td>
                                        <td>{{$EmployeeLevel->Code}}</td>
                                        <td>{{$EmployeeLevel->BasicSalary}}</td>
                                        <td>{{$EmployeeLevel->BasicFoodAllowance}}</td>
                                        <td>{{$EmployeeLevel->BasicFuelAllowance}}</td>
                                        <td>{{$EmployeeLevel->BasicHouseholdAllowance}}</td>
                                        <td>{{$EmployeeLevel->BasicPhoneAllowance}}</td>
                                        <td>{{$EmployeeLevel->BasicResponseAllowance}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a
                                                    class="btn btn-outline-info"
                                                    href="{{route('employee-level.edit',$EmployeeLevel->EmployeeLevelId)}}"
                                                    role="button">Edit</a>
                                                <form class="delete-employee-level-form" method="post"
                                                      action="{{route('employee-level.destroy',$EmployeeLevel->EmployeeLevelId)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button"
                                                            class="btn btn-outline-danger">
                                                        Xóa
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--Close Table-->
                        </div>
                        <!--Close Card body-->
                    </div>
                </div>
                <!--Close Row-->
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $('#EmployeeLevels').DataTable({
                paging: true,
                searching: false,
                "scrollX": true,
                "overflow": true,
                info: false
            }
        );
        $('#EmployeeLevels .delete-employee-level-form>button').on('click', function (e) {
            e.preventDefault();
            if (confirm('Bạn chắc chắn muốn xóa chi nhánh???')) {
                $(this).parent().submit();
            }
        });
        @if(session('message'))
        toastr.success('{{session('message')}}');
        @endif
    </script>
@endsection
