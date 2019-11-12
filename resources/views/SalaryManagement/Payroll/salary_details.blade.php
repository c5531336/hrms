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
                                        <th>Họ Và Tên</th>
                                        <th>Chức vụ</th>
                                        <th>Giới tính</th>
                                        <th>Ngày nhận việc</th>
                                        <th>Ngày thôi việc</th>
                                        <th>Xác Nhận Ăn Trưa</th>
                                        <th>Bảo Hiểm Xã Hội</th>
                                        <th>Lương Cơ Bản</th>
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
                                        <th>Họ Và Tên </th>
                                        <th>Bộ Phận </th>
                                        <th>X1-Thử Việc</th>
                                        <th>A1-Thử Việc</th>
                                        <th>E1-Thử Việc</th>
                                        <th>X-Chính Thức </th>
                                        <th>A-Chính Thức </th>
                                        <th>Đ4-Đ8</th>
                                        <th>E-Ca Đêm</th>
                                        <th>Thời Gian Nghỉ Ca Hành Chính</th>
                                        <th>Thời Gian Nghỉ Ca Ngày</th>
                                        <th>Thời Gian Nghỉ Ca Đêm</th>
                                        <th>OT</th>
                                        <th>OT Chủ Nhật</th>
                                        <th>Tổng Ngày Công</th>
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
                                        <th>Họ Và Tên </th>
                                        <th>Bộ Phận </th>
                                        <th>X1-Thử Việc</th>
                                        <th>A1-Thử Việc</th>
                                        <th>E1-Thử Việc</th>
                                        <th>X-Chính Thức </th>
                                        <th>A-Chính Thức </th>
                                        <th>Đ4-Đ8</th>
                                        <th>E-Ca Đêm</th>
                                        <th>Thời Gian Nghỉ Ca Hành Chính</th>
                                        <th>Thời Gian Nghỉ Ca Ngày</th>
                                        <th>Thời Gian Nghỉ Ca Đêm</th>
                                        <th>OT</th>
                                        <th>OT Chủ Nhật</th>
                                        <th>Số Lượng SP</th>
                                        <th>Thành Tiền</th>
                                        <th>Thưởng Năng Suất</th>
                                        <th>Bù Lương</th>
                                        <th>Tiền Tăng Ca</th>
                                        <th>Tổng Lương</th>
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
                                        <th>Họ Và Tên</th>
                                        <th>Bộ Phận </th>
                                        <th>Trách Nhiệm</th>
                                        <th>Sản Xuất</th>
                                        <th>Tiền Ăn</th>
                                        <th>Xăng</th>
                                        <th>Nhà ở</th>
                                        <th>Điện Thoại</th>
                                        <th>Khác</th>
                                        <th>Tổng Trợ cấp</th>
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
                                        <th>Họ Và Tên </th>
                                        <th>Bộ Phận </th>
                                        <th>Bảo Hiểm Xã Hội</th>
                                        <th>Thu Nhập Cá Nhân</th>
                                        <th>Tiền Ăn</th>
                                        <th>Ứng Lương</th>
                                        <th>Bồi Thường Thiệt Hại</th>
                                        <th>Đồng Phục</th>
                                        <th>Khác</th>
                                        <th>Giảm Trừ Cá Nhân</th>
                                        <th>Số Người Phụ Thuộc</th>
                                        <th>Giảm Trừ Số Người Phụ Thuộc</th>
                                        <th>Thu Nhập Chịu Thuế TNCN</th>
                                        <th>Tổng Khoản Trừ</th>
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
