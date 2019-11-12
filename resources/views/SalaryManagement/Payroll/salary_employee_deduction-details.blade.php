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
                            <button type="button" class="btn btn-default btn-block" ><a href="{{route('salary-management.payroll.index')}}">BACK</a></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
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
