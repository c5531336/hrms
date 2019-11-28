@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <h4>
                                <i class="fas fa-user-edit"></i> Chỉnh Sửa Công
                            </h4>
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
        <div class="row">
            <div class="card-body">
                <h5>Nhập Mã Số Nhân Viên:</h5>
                <div class="input-group input-group-sm">
                    <input type="number" class="form-control">
                    <span class="input-group-append"><a class="btn btn-info btn-flat" href="{{route('timekeeping.edit.editdetails')}}" type="button">Search</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
