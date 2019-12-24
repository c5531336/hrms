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
                            <th>{{__('Man Hours')}}</th>
                            <th>{{__('Function')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($EmployeeDetails as $key => $EmployeeDetail)
                            @php
                                $warningDepartment = false;
                                $warningTimeKeeping=false;
                                if((int)$EmployeeDetail->TimeShiftId_1===0 && !empty($EmployeeDetail->checkin_1)){
                                          $warningDepartment=true;
                                 }
                                if(!empty($EmployeeDetail->checkin_1)&& empty($EmployeeDetail->checkout_1)){
                                    $warningTimeKeeping=true;

                                }

                                if((int)$EmployeeDetail->TimeShiftId_2===0 && !empty($EmployeeDetail->checkin_2)){
                                          $warningDepartment=true;
                                     }
                                if(!empty($EmployeeDetail->checkin_2)&& empty($EmployeeDetail->checkout_2)){
                                    $warningTimeKeeping=true;

                                }

                                if((int)$EmployeeDetail->TimeShift_3===0 &&!empty($EmployeeDetail->checkin_3)){
                                          $warningDepartment=true;
                                     }
                                if(!empty($EmployeeDetail->checkin_3)&& empty($EmployeeDetail->checkout_3)){
                                    $warningTimeKeeping=true;
                                }

                            @endphp
                            <tr style="{{($warningTimeKeeping||$warningDepartment)?'background-color:#fbeaa88c':''}}">
                                <td>{{$EmployeeDetail->date->toDateString()}}</td>
                                <td>{{((int)$EmployeeDetail->TimeShiftId_1!==0)?$EmployeeDetail->TimeShift1->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_1)?\Carbon\Carbon::parse($EmployeeDetail->checkin_1)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_1)?\Carbon\Carbon::parse($EmployeeDetail->checkout_1)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{((int)$EmployeeDetail->TimeShiftId_2!==0)?$EmployeeDetail->TimeShift2->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_2)?\Carbon\Carbon::parse($EmployeeDetail->checkin_2)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_2)?\Carbon\Carbon::parse($EmployeeDetail->checkout_2)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{((int)$EmployeeDetail->TimeShiftId_3!==0)?$EmployeeDetail->TimeShift3->Name:__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkin_3)?\Carbon\Carbon::parse($EmployeeDetail->checkin_3)->toTimeString():__('Not Checkin')}}</td>
                                <td>{{!empty($EmployeeDetail->checkout_3)?\Carbon\Carbon::parse($EmployeeDetail->checkout_3)->toTimeString():__('Not Checkin')}}</td>
                                <th>{{(\Carbon\Carbon::parse($EmployeeDetail->checkin_1)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_1)))
                                        + (\Carbon\Carbon::parse($EmployeeDetail->checkin_2)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_2)))
                                        +(\Carbon\Carbon::parse($EmployeeDetail->checkin_3)->diffInHours(\Carbon\Carbon::parse($EmployeeDetail->checkout_3)))
                                }}</th>
                                <td>
                                    <button type="button" class="btn btn-info edit-button"
                                            data-Id="{{$EmployeeDetail->id}}"
                                            data-toggle="button" aria-pressed="false"> Edit
                                    </button>
                                </td>
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

        $('.table .edit-button').on('click', function () {
            console.log($(this).attr('data-Id'));
            axios({
                method: 'get',
                url: '{{route('time-keeping.index')}}/'+$(this).attr('data-Id')+'/edit',
                responseType: 'stream'
            })
                .then(function (response) {
                    // handle success
                    console.log(response.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
        })
    </script>

@endsection
