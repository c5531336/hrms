@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <p id="Date"></p>
                        </ol>
                    </div>
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
        <div class="row container-fluid">
            <div class="col-md-12 table-responsive">
                <table class="table table-striped table-bordered ">
                    <h4>Tổng Công</h4>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>MSNV</th>
                        <th>Họ Và Tên</th>
                        <th>Bộ Phận</th>
                        <th>Ca Làm Việc</th>
                        <th>Tổng Giờ</th>
                        <th>Chi Tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <th>0001</th>
                        <th>Nguyễn Văn A</th>
                        <th>EN1</th>
                        <th>Cangay</th>
                        <th>150</th>
                        <th><a class="btn btn-primary" href="#" role="button">Details</a></th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>0002</th>
                        <th>Nguyễn Văn B</th>
                        <th>TP1</th>
                        <th>cadem</th>
                        <th>150</th>
                        <th><a class="btn btn-primary" href="#" role="button">Details</a></th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>0003</th>
                        <th>Nguyễn Văn C</th>
                        <th>TP2</th>
                        <th>cangay</th>
                        <th>150</th>
                        <th><a class="btn btn-primary" href="#" role="button">Details</a></th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
