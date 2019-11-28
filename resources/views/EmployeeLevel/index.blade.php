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
                                    Danh sách bậc công nhân
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
                                    <th>Mã Chi Nhánh</th>
                                    <th>Tên Chi Nhánh</th>
                                    <th>Chức năng</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($EmployeeLevels as $EmployeeLevel)
                                    <tr>
                                        <td>{{$EmployeeLevel->BranchCode}}</td>
                                        <td>{{$EmployeeLevel->Name}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a
                                                    class="btn btn-outline-info"
                                                    href="{{route('employee-level.edit',$item->BranchId)}}"
                                                    role="button">Edit</a>
                                                <form class="delete-employee-level-form" method="post"
                                                      action="{{route('employee-level.destroy',$item->BranchId)}}">
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
                paging: false,
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
