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
                                <div class="col-md-8">
                                    {{__('Employee List')}}
                                </div>
                                <div class="col-md-4">
                                    <a name="" id="" class="btn btn-success"
                                       href="{{route('employee.create')}}" role="button">{{__('Create New')}}</a>
                                    <a name="" id="" class="btn btn-success"
                                       href="{{route('employee.create')}}" role="button">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--Open Table-->
                            <table id="Employees" class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>{{__('Branch Name')}}</th>
                                    <th>{{__('Department Name')}}</th>
                                    <th>{{__('EmployeeId')}}</th>
                                    <th>{{__('FullName')}}</th>
                                    <th>{{__('Functions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Employees as $Employee)
                                    <tr>
                                        <td>{{$Employee->Branch->Name}}</td>
                                        <td>{{$Employee->Department->Name}}</td>
                                        <td>{{$Employee->EmployeeId}}</td>
                                        <td>{{$Employee->FullName}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a
                                                    class="btn btn-outline-info"
                                                    href="{{route('employee.show',$Employee->EmployeeId)}}"
                                                    role="button">{{__('Detail')}}</a>
                                                <a
                                                    class="btn btn-outline-info"
                                                    href="{{route('employee.edit',$Employee->EmployeeId)}}"
                                                    role="button">{{__('Edit')}}</a>
                                                <form class="delete-branch-form" method="post"
                                                      action="{{route('employee.destroy',$Employee->EmployeeId)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="button"
                                                            class="btn btn-group btn-outline-danger">
                                                        {{__('Delete')}}
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
        $('#Employees').DataTable({
                paging: true,
                searching: true,
                "scrollX": true,
                "overflow": true,
                info: false
            }
        );
        $('#Employees .delete-branch-form>button').on('click', function (e) {
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
