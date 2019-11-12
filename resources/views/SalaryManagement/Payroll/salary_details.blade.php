@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="container ">
                    <!-- Employee_Details_Table -->
                    <div class="row">
                        <div class="card bg-light mt-3">
                            <div class="card-body">
                                <table id="Employee-Details" class="table table-bordered table-hover ">
                                    <thead>
                                    <div class="card-header">
                                        Bảng Chi tiết Cá Nhân
                                    </div>
                                    <tr>
                                        <th>ID</th>
                                        <th>MSNV</th>
                                        <th>Full Name</th>
                                        <th>Position</th>
                                        <th>Gender</th>
                                        <th>Starting Work</th>
                                        <th>Time off Work</th>
                                        <th>Lunch Confirmed</th>
                                        <th>Social insurance</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Workdays_Details_Table -->
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
                            </div>
                        </div>
                    </div>
                    <!-- Income_Details_Table -->
                    <div class="row">
                        <div class="card bg-light mt-3">
                            <div class="card-header">
                                Thu nhập chi tiết
                            </div>
                            <div class="card-body">
                                <table id="Salary-Details" class="table table-bordered table-hover ">
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
                        </div>
                    </div>
                    <!-- Allowance_Details_Table -->
                    <div class="row">
                        <div class="card bg-light mt-3">
                            <div class="card-header">
                                Trợ cấp chi tiết
                            </div>
                            <div class="card-body">
                                <table id="Allowance-Details" class="table table-bordered table-hover">
                                    <thead>
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
                        </div>
                </div>
                    <!-- Deduction_Details_Table -->
                    <div class="row">
                        <div class="card bg-light mt-3">
                            <div class="card-header">
                                Khoản trừ chi tiết
                            </div>
                            <div class="card-body">
                                <table id="Deduction-Details" class="table table-bordered table-hover ">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>MSNV</th>
                                        <th>Full Name </th>
                                        <th>Position </th>
                                        <th>Social insurance</th>
                                        <th>Personal income</th>
                                        <th>Eating-fee</th>
                                        <th>Advance Salary</th>
                                        <th>Indemnify damages</th>
                                        <th>Uniform</th>
                                        <th>Others</th>
                                        <th>Deduce yourself</th>
                                        <th>Number of Dependents</th>
                                        <th>Deduce NoD</th>
                                        <th>Income taxes</th>
                                        <th>Total Deductions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                <button type="button" class="btn btn-default btn-block" ><a href="{{route('salary-management.payroll.index')}}">BACK</a></button>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
                /*Datatable Employee_Details*/
                let dataEmployee = [
                    {
                        "ID": "1",
                        "MSNV": "0001",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Gender":     "Male",
                        "Start Date": "01/09/2019",
                        "Time off Work":"-",
                        "Lunch Confirmed": "<div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" checked=\"checked\" value=\"\" id=\"defaultCheck1\"><label class=\"form-check-label\" for=\"defaultCheck1\"></label></div>"
                        ,
                        "Social insurance": "550,000",
                        "Salary": "9,000,000"
                    },
                    {
                        "ID": "2",
                        "MSNV": "0002",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Gender":     "Male",
                        "Start Date": "01/09/2019",
                        "Time off Work":"-",
                        "Lunch Confirmed": "<div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" checked=\"checked\" value=\"\" id=\"defaultCheck1\"><label class=\"form-check-label\" for=\"defaultCheck1\"></label></div>"
                        ,
                        "Social insurance": "550,000",
                        "Salary": "9,000,000"
                    },
                    {
                        "ID": "3",
                        "MSNV": "0003",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Gender":     "Female",
                        "Start Date": "01/09/2019",
                        "Time off Work":"-",
                        "Lunch Confirmed": "<div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" checked=\"checked\" value=\"\" id=\"defaultCheck1\"><label class=\"form-check-label\" for=\"defaultCheck1\"></label></div>"
                        ,
                        "Social insurance": "550,000",
                        "Salary": "9,000,000"
                    }
                ];
                $('#Employee-Details').DataTable({
                    data: dataEmployee,
                    paging: false,
                    "scrollX": true,
                    "overflow": true,
                    columns: [
                        { data: 'ID' },
                        { data: 'MSNV' },
                        { data: 'Full Name' },
                        { data: 'Position' },
                        { data: 'Gender' },
                        { data: 'Start Date'},
                        { data: 'Time off Work'},
                        { data: 'Lunch Confirmed'},
                        { data: 'Social insurance'},
                        { data: 'Salary'}
                    ]
                });
            </script>
            <script>
                /*Datatable Workdays_Details*/
                let dataWorkdays = [
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
                    data: dataWorkdays,
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
            <script>
                /*Datatable Income-Details*/
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
            <script>
                /*Datatable Deduction-Details*/
                let dataDeduction = [
                    {
                        "ID": "1",
                        "MSNV": "0001",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Social insurance":     "510,000",
                        "Personal income": "510,000",
                        "Eating-fee":"480,000",
                        "Advance Salary": "420,000",
                        "Indemnify damages": "0",
                        "Uniform": "80,000",
                        "Others": "0",
                        "Deduce yourself": "0",
                        "Number of Dependents": "0",
                        "Deduce NoD": "0",
                        "Income taxes" : "0",
                        "Total Deductions": "2,000,000"
                    },
                    {
                        "ID": "2",
                        "MSNV": "0002",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Social insurance":     "510,000",
                        "Personal income": "510,000",
                        "Eating-fee":"480,000",
                        "Advance Salary": "420,000",
                        "Indemnify damages": "0",
                        "Uniform": "80,000",
                        "Others": "0",
                        "Deduce yourself": "0",
                        "Number of Dependents": "0",
                        "Deduce NoD": "0",
                        "Income taxes" : "0",
                        "Total Deductions": "2,000,000"
                    },
                    {
                        "ID": "3",
                        "MSNV": "0003",
                        "Full Name":       "Tiger Nixon",
                        "Position":   "System Architect",
                        "Social insurance":     "510,000",
                        "Personal income": "510,000",
                        "Eating-fee":"480,000",
                        "Advance Salary": "420,000",
                        "Indemnify damages": "0",
                        "Uniform": "80,000",
                        "Others": "0",
                        "Deduce yourself": "0",
                        "Number of Dependents": "0",
                        "Deduce NoD": "0",
                        "Income taxes" : "0",
                        "Total Deductions": "2,000,000"
                    }
                ];
                $('#Deduction-Details').DataTable({
                    data: dataDeduction,
                    paging: false,
                    "scrollX": true,
                    "overflow": true,
                    columns: [
                        { data: 'ID' },
                        { data: 'MSNV' },
                        { data: 'Full Name' },
                        { data: 'Position' },
                        { data: 'Social insurance'},
                        { data: 'Personal income'},
                        { data: 'Eating-fee'},
                        { data: 'Advance Salary'},
                        { data: 'Indemnify damages'},
                        { data: 'Uniform'},
                        { data: 'Others'},
                        { data: 'Deduce yourself'},
                        { data: 'Number of Dependents'},
                        { data: 'Deduce NoD'},
                        { data: 'Income taxes'},
                        { data: 'Total Deductions'}
                    ]
                });
            </script>
@endsection
