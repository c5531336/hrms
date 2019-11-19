@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="card bg-light mt-3 ">
                        <div class="card-header">
                           Thông tin lương
                        </div>
                        <div class="card-body table-responsive">
                            <table id="TTL" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>MSNV</th>
                                    <th>Họ Và Tên</th>
                                    <th>Bộ Phận</th>
                                    <th>Giới Tính</th>
                                    <th>Tổng Ngày Công</th>
                                    <th>Tổ Thu Nhập Dự Tính</th>
                                    <th>Tổng Khoản Trừ</th>
                                    <th>Lương Thực Nhận</th>
                                    <th>Chi Tiết</th>
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
        let data = [
            {
                "ID": "1",
                "MSNV": "0001",
                "Full Name": "Tiger Nixon",
                "Position": "System Architect",
                "Gender": "Male",
                "Total Workdays": "26",
                "Estimated Total Income": "9,000,000",
                "Total Deduction": "2,000,000",
                "Final Salary": "7,000,000",
                "Details": "<a class=\"btn btn-primary\" href=\"{{route('salary-management.payroll.details2')}}\" role=\"button\">Details</a>"
            },
            {
                "ID": "2",
                "MSNV": "0002",
                "Full Name":       "Tiger Nixon",
                "Position":   "System Architect",
                "Gender":     "Male",
                "Total Workdays": "26",
                "Estimated Total Income":"9,000,000",
                "Total Deduction":       "2,000,000",
                "Final Salary": "7,000,000",
                "Details": "<a class=\"btn btn-primary\" href=\"{{route('salary-management.payroll.details2')}}\" role=\"button\">Details</a>"
            },
            {
                "ID": "3",
                "MSNV": "0003",
                "Full Name":       "Tiger Nixon",
                "Position":   "System Architect",
                "Gender":     "Female",
                "Total Workdays": "26",
                "Estimated Total Income":"9,000,000",
                "Total Deduction":       "2,000,000",
                "Final Salary": "7,000,000",
                "Details": "<a class=\"btn btn-primary\" href=\"{{route('salary-management.payroll.details2')}}\" role=\"button\">Details</a>"
            }
        ];

        $('#TTL').DataTable({
            data: data,
            responsive:true,
            paging: false,
            columns: [
                { data: 'ID' },
                { data: 'MSNV' },
                { data: 'Full Name' },
                { data: 'Position' },
                { data: 'Gender' },
                { data: 'Total Workdays'},
                { data: 'Estimated Total Income'},
                { data: 'Total Deduction'},
                { data: 'Final Salary'},
                { data: 'Details'}
            ]
        });
    </script>
@endsection
