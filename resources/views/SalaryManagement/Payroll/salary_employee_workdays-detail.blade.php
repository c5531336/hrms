@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">

                        <div class="card-header">

                            Bảng Công chi tiết

                        </div>
                        <div class="card-body">
                            <table id="Workdays-Details" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>MSNV</th>
                                        <th>Full Name </th>
                                        <th>Position </th>
                                        <th>X1-probationary</th>
                                        <th>A1-probationary</th>
                                        <th>E1-probationary</th>
                                        <th>X-Offical </th>
                                        <th>A-Offical </th>
                                        <th>Đ4-Đ8</th>
                                        <th>E-Night</th>
                                        <th>HC-TimeOff</th>
                                        <th>Timeoff-Daytime</th>
                                        <th>Timeoff-NightShift</th>
                                        <th>OT</th>
                                        <th>OT-Sunday</th>
                                        <th>Total Workdays </th>
                                    </tr>
                                </thead>
                            </table>
                            <button type="button" class="btn btn-default btn-block" ><a href="{{route('salary-management.payroll.index')}}">BACK</a></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
                let data = [
                    {
                        "ID": "1",
                        "MSNV": "0001",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "100",
                        "A1-probationary": "100",
                        "E1-probationary":"100",
                        "X-Offical": "100",
                        "A-Offical": "100",
                        "D4-D8": "100",
                        "E-Night": "100",
                        "HC-TimeOff": "100",
                        "Timeoff-Daytime": "100",
                        "Timeoff-NightShift": "100",
                        "OT" : "100",
                        "OT-Sunday": "100",
                        "Total Workdays": "26"
                    },
                    {
                        "ID": "2",
                        "MSNV": "0002",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "100",
                        "A1-probationary": "100",
                        "E1-probationary":"100",
                        "X-Offical": "100",
                        "A-Offical": "100",
                        "D4-D8": "100",
                        "E-Night": "100",
                        "HC-TimeOff": "100",
                        "Timeoff-Daytime": "100",
                        "Timeoff-NightShift": "100",
                        "OT" : "100",
                        "OT-Sunday": "100",
                        "Total Workdays": "26"
                    },
                    {
                        "ID": "3",
                        "MSNV": "0003",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "100",
                        "A1-probationary": "100",
                        "E1-probationary":"100",
                        "X-Offical": "100",
                        "A-Offical": "100",
                        "D4-D8": "100",
                        "E-Night": "100",
                        "HC-TimeOff": "100",
                        "Timeoff-Daytime": "100",
                        "Timeoff-NightShift": "100",
                        "OT" : "100",
                        "OT-Sunday": "100",
                        "Total Workdays": "26"
                    }
                ];

                $('#Workdays-Details').DataTable({
                    data: data,
                    paging: false,
                    "scrollX": true,
                    "overflow": true,
                    columns: [
                        { data: 'ID' },
                        { data: 'MSNV' },
                        { data: 'Full Name' },
                        { data: 'Position' },
                        { data: 'X1-probationary'},
                        { data: 'A1-probationary'},
                        { data: 'E1-probationary'},
                        { data: 'X-Offical'},
                        { data: 'A-Offical'},
                        { data: 'D4-D8'},
                        { data: 'E-Night'},
                        { data: 'HC-TimeOff'},
                        { data: 'Timeoff-Daytime'},
                        { data: 'Timeoff-NightShift'},
                        { data: 'OT'},
                        { data: 'OT-Sunday'},
                        { data: 'Total Workdays'}
                    ]
                });
            </script>
@endsection
