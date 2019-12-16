@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!--Open Row-->
                <div class="row">
                    <div class="card bg-light mt-3 col-12">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    Danh sách Phòng ban
                                </div>
                                <div class="col-md-3">
                                    <a name="" id="" class="btn btn-success"
                                       href="{{route('department.create')}}" role="button">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <table id="Departments" class="table table-bordered table-hover ">
                                            <thead>
                                            <tr>
                                                <th>Chi Nhánh</th>
                                                <th>Tên tổ</th>
                                                <th>Mã tổ</th>
                                                <th>Thuộc phòng ban</th>
                                                <th>Trợ cấp</th>
                                                <th>Chức năng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($childrenDepartments->count()>0)
                                            @foreach($childrenDepartments as $department)
                                                @if($department->ParentDepartmentId!==0)
                                                    <tr>
                                                        <td>{{$department->belongedBranch->Name}}</td>
                                                        <td>{{$department->Name}}</td>
                                                        <td>{{$department->DepartmentCode}}</td>
                                                        <td>{{$department->ParentDepartmentId!==0?$department->belongedDepartment->Name:''}}</td>
                                                        <td>{{number_format($department->Allowance)}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a
                                                                    class="btn btn-outline-info"
                                                                    href="{{route('department.edit',$department->DepartmentId)}}"
                                                                    role="button">Edit</a>
                                                                <form class="delete-department-form" method="post"
                                                                      action="{{route('department.destroy',$department->DepartmentId)}}">
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
                                                @endif
                                            @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-6">
                                        <table id="Parent-Departments" class="table table-bordered table-hover ">
                                            <thead>
                                            <tr>
                                                <th>Chi Nhánh</th>
                                                <th>Tên Phòng ban</th>
                                                <th>Mã Phòng ban</th>
                                                <th>Chức năng</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($departments->count()>0)
                                            @foreach($departments as $department)
                                                @if($department->ParentDepartmentId===0)
                                                    <tr>
                                                        <td>{{$department->belongedBranch->Name}}</td>
                                                        <td>{{$department->Name}}</td>
                                                        <td>{{$department->DepartmentCode}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a
                                                                    class="btn btn-outline-info"
                                                                    href="{{route('department.edit',$department->DepartmentId)}}"
                                                                    role="button">Edit</a>
                                                                <form class="delete-department-form" method="post"
                                                                      action="{{route('department.destroy',$department->DepartmentId)}}">
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
                                                @endif
                                            @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

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
        $('#Deparments').DataTable({
                paging: false,
                searching: false,
                "scrollX": true,
                "overflow": true,
                info: false
            }
        );
        $('#Parent-Departments').DataTable({
                paging: false,
                searching: false,
                "scrollX": true,
                "overflow": true,
                info: false
            }
        );
        $('#Departments .delete-department-form>button').on('click', function (e) {
            e.preventDefault();
            if (confirm('Bạn chắc chắn muốn xóa chi nhánh???')) {
                $(this).parent().submit();
            }
        });
        $('#Parent-Departments .delete-department-form>button').on('click', function (e) {
            e.preventDefault();
            if (confirm('Bạn chắc chắn muốn xóa chi nhánh???')) {
                $(this).parent().submit();
            }
        });
        @if(session('message'))
        toastr.success('{{session('message')}}');
        @endif
        @if(session('error-message'))
        toastr.error('{{session('error-message')}}');
        @endif
    </script>
@endsection
