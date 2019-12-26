@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="card bg-light mt-3 ">
                        <div class="card-header">
                            {{__('Temporary Salary Calculated')}}
                        </div>
                        <div class="card-body table-responsive">
                            <table id="TTL" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>MSNV</th>
                                        <th>Họ Và Tên</th>
                                        <th>Bộ Phận</th>
                                        <th>Giới Tính</th>
                                        <th>{{__('Working Days')}}</th>
                                        <th>{{__('Working Hours')}}</th>
                                        <th>{{__('Temporary Salary')}}</th>
                                        <th>{{__('Temporary Allowance')}}</th>
                                        <th>{{__('Detail')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($Data as $key => $item)
                                    <tr>
                                        <td>{{$item->EmployeeId}}</td>
                                        <td>{{$item->Employee->FullName}}</td>
                                        <td>{{$item->Employee->Department->Name}}</td>
                                        <td>{{$item->Employee->gender}}</td>
                                        <td>{{$item->TotalWorkingDay}}</td>
                                        <td>{{round($item->TotalWorkingTime,1)}}</td>
                                        <td>{{number_format($item->RawSalaryByHours)}}</td>
                                        <td>{{number_format($item->RawFoodAllowance+ $item->RawTimeAllowance + $item->RawDepartmentAllowance)}}</td>
                                        <td><a class="btn btn-primary"
                                                     href="{{route('temp-salary.show',$item->EmployeeId)}}"
                                                     role="button">Details</a></td>
                                    </tr>
                                @empty
                                    <p>{{__('No data')}}</p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
                $('#TTL').DataTable({
                    responsive: true,
                    paging: false,
                });
            </script>
@endsection
