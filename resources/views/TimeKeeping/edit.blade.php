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
            {{-- <div class="container-fluid">
                 <div class="row">
                     <div class="col-12">
                         <!-- Main content -->
                         <div class="invoice p-3 mb-3">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4>
                                         <i class="fas fa-globe"></i> Bảng Công Chi Tiết Tháng <a id="Date"></a>
                                     </h4>
                                 </div>
                                 <!-- /.col -->
                             </div>
                             <!-- info row -->
                             <div class="row invoice-info">
                                 <div class="col-sm-4 invoice-col">
                                     <strong>MSNV</strong>: 0001 <br>
                                     <strong>Họ Và Tên</strong>: Nguyễn Văn A<br>
                                     <strong>Giới tính</strong>: Male <br>
                                     <strong>Bộ Phận</strong>: System Management <br>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>--}}
            <employee-info-component :Employee_Info="{{ $EmployeeInfo }}"></employee-info-component>
            <!-- /.container-fluid-->
            <div class="card">
                <div class="card-body table-responsive">
                    <form id="TimeKeepingForm" method="POST"
                          action="{{route('time-keeping.update',$EmployeeInfo->EmployeeId)}}">
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
                            </tr>
                            </thead>

                            <tbody>

                            @csrf
                            @method('PUT')
                            @forelse($TimeKeepingDetails as $key => $detail)
                                <tr>
                                    <td>{{$detail->date->format('d-m-Y')}}</td>
                                    <td>
                                        <select name="{{$detail->id}}[TimeShiftId_1]">
                                            <option value="0">{{__('No Time Shift')}}</option>
                                            @foreach($TimeShift as $key => $value)
                                                <option
                                                    value="{{$value->TimeShiftId}}" {{$value->TimeShiftId===(int)$detail->TimeShiftId_1?'selected':''}}>{{$value->Name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input name="{{$detail->id}}[checkin_1]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkin_1}}"></td>
                                    <td><input name="{{$detail->id}}[checkout_1]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkout_1}}"></td>
                                    <td>
                                        <select name="{{$detail->id}}[TimeShiftId_2]">
                                            <option value="0">{{__('No Time Shift')}}</option>
                                            @foreach($TimeShift as $key => $value)
                                                <option
                                                    value="{{$value->TimeShiftId}}" {{$value->TimeShiftId===(int)$detail->TimeShiftId_2?'selected':''}}> {{$value->Name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input name="{{$detail->id}}[checkin_2]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkin_2}}"></td>
                                    <td><input name="{{$detail->id}}[checkout_2]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkout_2}}"></td>
                                    <td>
                                        <select name="{{$detail->id}}[TimeShiftId_3]">
                                            <option value="0">{{__('No Time Shift')}}</option>
                                            @foreach($TimeShift as $key => $value)
                                                <option
                                                    value="{{$value->TimeShiftId}}" {{$value->TimeShiftId===(int)$detail->TimeShiftId_3?'selected':''}}> {{$value->Name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input name="{{$detail->id}}[checkin_3]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkin_3}}"></td>
                                    <td><input name="{{$detail->id}}[checkout_3]" type="text" class="form-control time-picker"
                                               value="{{$detail->checkout_3}}"></td>
                                </tr>
                            @empty
                                <p> no Data</p>
                            @endforelse

                            </tbody>
                        </table>
                    </form>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success btn-block " id="submit" role="button">Update</button>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.time-picker').timepicker({
                timeFormat: 'H:mm:ss',
                interval: 10,
                dropdown: true,
                scrollbar: true
            });
        });
        $('#submit').on('click', function (e) {
            e.preventDefault();
            $('#TimeKeepingForm').submit();
        })
    </script>

@endsection
