@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard v3</h1>
                    </div><!-- /.col -->
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
            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light mt-3">

                        <div class="card-header">

                           Thông tin lương

                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>x</th>
                                    <th>y</th>
                                    <th>z</th>
                                    <th>nb</th>
                                    <th>nb</th>
                                    <th>function</th>
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
                "name":       "Tiger Nixon",
                "position":   "System Architect",
                "salary":     "$3,120",
                "start_date": "2011/04/25",
                "office":     "Edinburgh",
                "extn":       "5421"
            },
            {
                "name":       "Garrett Winters",
                "position":   "Director",
                "salary":     "$5,300",
                "start_date": "2011/07/25",
                "office":     "Edinburgh",
                "extn":       "8422"
            }
        ];

        $('#example').DataTable( {
            data: data,
            paging: false,
            columns: [
                { data: 'name' },
                { data: 'position' },
                { data: 'salary' },
                { data: 'office' },
                { data: 'extn' },
            ]
        } );
    </script>
@endsection
