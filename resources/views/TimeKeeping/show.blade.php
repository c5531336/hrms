@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <a class="btn btn-lg btn-primary fas fa-backward"
                               href="{{route('time-keeping.index')}}" role="button"></a>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v3</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>
                                        <i class="fas fa-globe"></i>{{__('Detail Time Keeping')}} <a id="Date"></a>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <strong>MSNV</strong>: {{ $EmployeeInfo->EmployeeId}} <br>
                                    <strong>Họ Và Tên</strong>: {{ $EmployeeInfo->FullName}}<br>
                                    <strong>Giới tính</strong>: {{ $EmployeeInfo->gender}} <br>
                                    <strong>Bộ Phận</strong>: {{ $EmployeeInfo->Department->Name}}<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid-->

            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered" style="overflow: auto;">

                        <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Tên Ca 1</th>
                            <th>Vào 1</th>
                            <th>Ra 1</th>
                            <th>Tên Ca 2</th>
                            <th>Vào 2</th>
                            <th>Ra 2</th>
                            <th>Tên Ca 3</th>
                            <th>Vào 3</th>
                            <th>Ra 3</th>
                            <th>Công</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($EmployeeDetails as $key => $EmployeeDetail)
                            <?php // dd($EmployeeDetail) ?>
                            <tr>
                                <td>{{$EmployeeDetail->date->toDateString()}}</td>
                                <td>{{($EmployeeDetail->DepartmentId_1!=0)?$EmployeeDetail->Department1->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_1)?\Carbon\Carbon::parse($EmployeeDetail->checkin_1)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_1)?\Carbon\Carbon::parse($EmployeeDetail->checkout_1)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{($EmployeeDetail->DepartmentId_2!=0)?$EmployeeDetail->Department2->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_2)?\Carbon\Carbon::parse($EmployeeDetail->checkin_2)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_2)?\Carbon\Carbon::parse($EmployeeDetail->checkout_2)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{($EmployeeDetail->DepartmentId_3!=0)?$EmployeeDetail->Department3->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_3)?\Carbon\Carbon::parse($EmployeeDetail->checkin_3)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_3)?\Carbon\Carbon::parse($EmployeeDetail->checkout_3)->toTimeString():__('Not Checkin')}}</td>
                                <th>{{(\Carbon\Carbon::parse($EmployeeDetail->checkin_1)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_1)))
                                        + (\Carbon\Carbon::parse($EmployeeDetail->checkin_2)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_2)))
                                        +(\Carbon\Carbon::parse($EmployeeDetail->checkin_3)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_3)))
                                }}</th>
                            </tr>
                        @empty
                            <p>No users</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        let date = new Date();
        let hour = String(date.getMonth() + 1); <!--January at 0-->
        document.getElementById("Date").innerHTML = hour;
    </script>

@endsection
