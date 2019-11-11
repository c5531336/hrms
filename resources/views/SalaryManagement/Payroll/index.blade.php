@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">

                        <div class="card-header">

                           Thông tin lương

                        </div>
                        <div class="card-body">
                            <table id="TTL" class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>MSNV</th>
                                    <th>Full Name</th>
                                    <th>Position</th>
                                    <th>Gender</th>
                                    <th>Total Workdays</th>
                                    <th>Estimated Total Income</th>
                                    <th>Total Deduction</th>
                                    <th>Final Salary</th>
                                    <th>Details</th>
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
                "Details": "<div class=\"btn-group\" role=\"group\">\n" +
                    "    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n" +
                    "      Detail\n" +
                    "    </button>\n" +
                    "    <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.employee-detail')}}\">Employee-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.workdays-detail')}}\">Workdays-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.income-detail')}}\">Income-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.deduction-detail')}}\">Deduction-Details</a>\n" +
                    "    </div>\n" +
                    "  </div>"
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
                "Details": "<div class=\"btn-group\" role=\"group\">\n" +
                    "    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n" +
                    "      Detail\n" +
                    "    </button>\n" +
                    "    <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.employee-detail')}}\">Employee-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.workdays-detail')}}\">Workdays-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.income-detail')}}\">Income-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.deduction-detail')}}\">Deduction-Details</a>\n" +
                    "    </div>\n" +
                    "  </div>"
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
                "Details": "<div class=\"btn-group\" role=\"group\">\n" +
                    "    <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n" +
                    "      Detail\n" +
                    "    </button>\n" +
                    "    <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.employee-detail')}}\">Employee-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.workdays-detail')}}\">Workdays-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.income-detail')}}\">Income-Details</a>\n" +
                    "      <a class=\"dropdown-item\" href=\"{{route('salary-management.payroll.deduction-detail')}}\">Deduction-Details</a>\n" +
                    "    </div>\n" +
                    "  </div>"
            }
        ];

        $('#TTL').DataTable({
            data: data,
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
