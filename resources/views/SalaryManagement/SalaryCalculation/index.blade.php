@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">

                        <div class="card-header">

                            Bảng Tính Lương

                        </div>
                        <div class="card-body">
                            <table id="Salary-Calculation" class="table table-bordered table-hover ">
                                <thead>
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
                                    <th>Lương Thử Việc</th>
                                    <th>Lương Chính Thức</th>
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
                                    <th>Lương Thử Việc-X1</th>
                                    <th>Lương Thử Việc-A1</th>
                                    <th>Lương Thử Việc-E1</th>
                                    <th>Lương Chính Thức-X</th>
                                    <th>Lương Chính Thức-A</th>
                                    <th>Lương Đ4-Đ8</th>
                                    <th>Lương Ca Đêm-E</th>
                                    <th>Số Lượng SP</th>
                                    <th>Thành Tiền</th>
                                    <th>Tổng Lương</th>
                                    <th>Tiền Tăng Ca HC</th>
                                    <th>Trách Nhiệm</th>
                                    <th>Sản Xuất</th>
                                    <th>Tiền Ăn</th>
                                    <th>Xăng</th>
                                    <th>Nhà ở</th>
                                    <th>Điện Thoại</th>
                                    <th>Khác</th>
                                    <th>Tổng Trợ cấp</th>
                                    <th>Thưởng Năng Suất</th>
                                    <th>Bù Lương</th>
                                    <th>Tổng Thu Nhập</th>
                                    <th>Giảm Trừ Cá Nhân</th>
                                    <th>Số Người Phụ Thuộc</th>
                                    <th>Giảm Trừ Số Người Phụ Thuộc</th>
                                    <th>Thu Nhập Chịu Thuế TNCN</th>
                                    <th>Giảm Trừ BHXH</th>
                                    <th>Giảm Trừ TNCN</th>
                                    <th>Giảm Trừ Tiền Ăn</th>
                                    <th>Ứng Lương</th>
                                    <th>Bồi Thường Thiệt Hại</th>
                                    <th>Đồng Phục</th>
                                    <th>Khác</th>
                                    <th>Tổng Khoản Trừ</th>
                                    <th>Lương Thực Nhận</th>
                                </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
        <script>
                /*Datatable Employee_Details*/
                let dataCalculation = [
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
                        "Probationary Salary": "1,000,000",
                        "Official Salary": "5,000,000",
                        "X1-probationary":     "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "A1-probationary": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "E1-probationary":"100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "X-Offical": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "A-Offical": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "D4-D8": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "E-Night": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "HC-TimeOff": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Timeoff-Daytime": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Timeoff-NightShift": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "OT" : "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "OT-Sunday": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total Workdays": "26",
                        "X1-Salary":     "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "A1-Salary": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "E1-Salary":"1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "X-Salary": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "A-Salary": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Salary_D4-D8": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "E-Salary": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Number of Product": "100 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total amount by product": "2,500,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total Salary": "4,000,000",
                        "Overtime wages" : "800,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Responsibility": "500,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Productions": "500,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Eating-fee": "500,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Fuel": "300,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Housing Cost": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Phone": "500,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Others": "100,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total Allowances": "3,400,000",
                        "Productivity reward": "1,000,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Extra salary" : "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total Income": "13,400,000",
                        "Deduce yourself": "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Number of Dependents": "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduce NoD": "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Income taxes" : "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Social insurance": "510,000",
                        "Deduction Personal income": "510,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Eating-fee":"480,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Advance Salary": "420,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Indemnify damages": "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Uniform": "80,000 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Deduction Others": "0 <a href=\"#\"><i class=\"fas fa-edit\"></i></a>",
                        "Total Deductions": "2,000,000",
                        "Final Salary" :"9,000,000"

                    }
                ];
                $('#Salary-Calculation').DataTable({
                    data: dataCalculation,
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
                        { data: 'Probationary Salary'},
                        { data: 'Official Salary'},
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
                        { data: 'Total Workdays'},
                        { data: 'X1-Salary'},
                        { data: 'A1-Salary'},
                        { data: 'E1-Salary'},
                        { data: 'X-Salary'},
                        { data: 'A-Salary'},
                        { data: 'Salary_D4-D8'},
                        { data: 'E-Salary'},
                        { data: 'Number of Product'},
                        { data: 'Total amount by product'},
                        { data: 'Total Salary'},
                        { data: 'Overtime wages'},
                        { data: 'Responsibility'},
                        { data: 'Productions'},
                        { data: 'Eating-fee'},
                        { data: 'Fuel'},
                        { data: 'Housing Cost'},
                        { data: 'Phone'},
                        { data: 'Others'},
                        { data: 'Total Allowances'},
                        { data: 'Productivity reward'},
                        { data: 'Extra salary'},
                        { data: 'Total Income'},
                        { data: 'Deduce yourself'},
                        { data: 'Number of Dependents'},
                        { data: 'Deduce NoD'},
                        { data: 'Income taxes'},
                        { data: 'Deduction Social insurance'},
                        { data: 'Deduction Personal income'},
                        { data: 'Deduction Eating-fee'},
                        { data: 'Deduction Advance Salary'},
                        { data: 'Deduction Indemnify damages'},
                        { data: 'Deduction Uniform'},
                        { data: 'Deduction Others'},
                        { data: 'Total Deductions'},
                        { data: 'Final Salary'}
                    ]
                });
            </script>
@endsection
