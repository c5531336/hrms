@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">
                        <div class="card-header">
                            Bảng Thu nhập chi tiết
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <table id="Salary-Details" class="table table-bordered table-hover ">
                                    <thead>
                                    <h3>Salary-Details</h3>
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
                                        <th>Number of Product</th>
                                        <th>Total Amount By Product</th>
                                        <th>Productivity reward</th>
                                        <th>Extra salary</th>
                                        <th>Overtime wages</th>
                                        <th>Total Salary</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="container-fluid">
                                <table id="Allowance-Details" class="table table-bordered table-hover">
                                    <thead>
                                    <h3>Allowance-Details</h3>
                                    <tr>
                                        <th>ID</th>
                                        <th>MSNV</th>
                                        <th>Full Name </th>
                                        <th>Position </th>
                                        <th>Responsibility</th>
                                        <th>Productions</th>
                                        <th>Eating-fee</th>
                                        <th>Fuel</th>
                                        <th>Housing Cost</th>
                                        <th>Phone</th>
                                        <th>Others</th>
                                        <th>Total Allowances</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <button type="button" class="btn btn-default btn-block" ><a href="{{route('salary-management.payroll.index')}}">BACK</a></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
                let dataSalary = [
                    {
                        "ID": "1",
                        "MSNV": "0001",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "1,000,000",
                        "A1-probationary": "1,000,000",
                        "E1-probationary":"1,000,000",
                        "X-Offical": "1,000,000",
                        "A-Offical": "1,000,000",
                        "D4-D8": "1,000,000",
                        "E-Night": "1,000,000",
                        "HC-TimeOff": "1,000,000",
                        "Timeoff-Daytime": "1,000,000",
                        "Timeoff-NightShift": "1,000,000",
                        "OT" : "1,000,000",
                        "OT-Sunday": "1,000,000",
                        "Number of Product": "100",
                        "Total amount by product": "2,500,000",
                        "Productivity reward": "1,000,000",
                        "Extra salary" : "0",
                        "Overtime wages" : "800,000",
                        "Total Salary": "6,000,000"
                    },
                    {
                        "ID": "2",
                        "MSNV": "0002",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "1,000,000",
                        "A1-probationary": "1,000,000",
                        "E1-probationary":"1,000,000",
                        "X-Offical": "1,000,000",
                        "A-Offical": "1,000,000",
                        "D4-D8": "1,000,000",
                        "E-Night": "1,000,000",
                        "HC-TimeOff": "1,000,000",
                        "Timeoff-Daytime": "1,000,000",
                        "Timeoff-NightShift": "1,000,000",
                        "OT" : "1,000,000",
                        "OT-Sunday": "1,000,000",
                        "Number of Product": "100",
                        "Total amount by product": "2,500,000",
                        "Productivity reward": "1,000,000",
                        "Extra salary" : "0",
                        "Overtime wages" : "800,000",
                        "Total Salary": "6,000,000"
                    },
                    {
                        "ID": "3",
                        "MSNV": "0003",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "X1-probationary":     "1,000,000",
                        "A1-probationary": "1,000,000",
                        "E1-probationary":"1,000,000",
                        "X-Offical": "1,000,000",
                        "A-Offical": "1,000,000",
                        "D4-D8": "1,000,000",
                        "E-Night": "1,000,000",
                        "HC-TimeOff": "1,000,000",
                        "Timeoff-Daytime": "1,000,000",
                        "Timeoff-NightShift": "1,000,000",
                        "OT" : "1,000,000",
                        "OT-Sunday": "1,000,000",
                        "Number of Product": "100",
                        "Total amount by product": "2,500,000",
                        "Productivity reward": "1,000,000",
                        "Extra salary" : "0",
                        "Overtime wages" : "800,000",
                        "Total Salary": "6,000,000"
                    }

                ];

                let AllowanceData = [

                    {
                        "ID": "1",
                        "MSNV": "0001",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Responsibility": "500,000",
                        "Productions": "500,000",
                        "Eating-fee": "500,000",
                        "Fuel": "300,000",
                        "Housing Cost": "1,000,000",
                        "Phone": "500,000",
                        "Others": "100,000",
                        "Total Allowances": "3,400,000"
                    },
                    {
                        "ID": "2",
                        "MSNV": "0002",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Responsibility": "500,000",
                        "Productions": "500,000",
                        "Eating-fee": "500,000",
                        "Fuel": "300,000",
                        "Housing Cost": "1,000,000",
                        "Phone": "500,000",
                        "Others": "100,000",
                        "Total Allowances": "3,400,000"
                    },
                    {
                        "ID": "3",
                        "MSNV": "0003",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Responsibility": "500,000",
                        "Productions": "500,000",
                        "Eating-fee": "500,000",
                        "Fuel": "300,000",
                        "Housing Cost": "1,000,000",
                        "Phone": "500,000",
                        "Others": "100,000",
                        "Total Allowances": "3,400,000"
                    }

                ];

                $('#Salary-Details').DataTable({
                    data: dataSalary,
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
                        { data: 'Number of Product'},
                        { data: 'Total amount by product'},
                        { data: 'Productivity reward'},
                        { data: 'Extra salary'},
                        { data: 'Overtime wages'},
                        { data: 'Total Salary'}
                    ]
                });
                $('#Allowance-Details').DataTable({
                    data: AllowanceData,
                    paging: false,
                    "scrollX": true,
                    "overflow": true,
                    columns: [
                        { data: 'ID' },
                        { data: 'MSNV' },
                        { data: 'Full Name' },
                        { data: 'Position' },
                        { data: 'Responsibility'},
                        { data: 'Productions'},
                        { data: 'Eating-fee'},
                        { data: 'Fuel'},
                        { data: 'Housing Cost'},
                        { data: 'Phone'},
                        { data: 'Others'},
                        { data: 'Total Allowances'}
                    ]
                });
            </script>
@endsection
