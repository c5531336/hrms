@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">

                        <div class="card-header">

                            Bảng Chi tiết Cá Nhân

                        </div>
                        <div class="card-body">
                            <table id="Employee-Details" class="table table-bordered table-hover ">
                                <thead>
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
                    data: data,
                    paging: false,
                    scrollY: 400,
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
@endsection
