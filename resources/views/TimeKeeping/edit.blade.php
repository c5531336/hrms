@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <a class="btn btn-lg btn-primary fas fa-backward"
                               href="{{route('time-keeping.index')}}" role="button"></a>
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> Bảng Công Chi Tiết Tháng <a id="Date"></a>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <strong>MSNV</strong>: 0001 <br>
                                    <strong>Họ Và Tên</strong>: Nguyễn Văn A<br>
                                    <strong>Giới tính</strong>: Male <br>
                                    <strong>Bộ Phận</strong>: System Management <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid-->
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered" style="overflow: auto;">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ngày</th>
                            <th>Tên Ca</th>
                            <th>Vào 1</th>
                            <th>Ra 1</th>
                            <th>Vào 2</th>
                            <th>Ra 2</th>
                            <th>Vào 3</th>
                            <th>Ra 3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <th>15/10/2019</th>
                            <th>HC</th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>16/10/2019</th>
                            <th>HC</th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>17/10/2019</th>
                            <th>HC</th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th>18/10/2019</th>
                            <th>HC</th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th>19/10/2019</th>
                            <th>HC</th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                            <th><input type="time" class="form-control"></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-success btn-block " href="#" role="button" >Update</a>
        </div>
    </div>


@endsection

@section('script')
    <script>
        let date = new Date();
        let hour = String(date.getMonth()+1); <!--January at 0-->
        document.getElementById("Date").innerHTML = hour;
    </script>

@endsection
