@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a class="btn btn-lg btn-primary fas fa-backward" href="{{route('salary-management.payroll.index')}}" role="button"></a>
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
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> Bảng lương chi tiết
                                        <small class="float-right">Date: 11/11/2019</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <strong>MSNV</strong>: 1 <br>
                                    <strong>Họ Và Tên</strong>: Tiger Nixon<br>
                                    <strong>Giới tính</strong>: Male <br>
                                    <strong>Chức vụ</strong>: System Architect <br>
                                    <strong>Bộ Phận</strong>: System Management <br>
                                </div>
                                <div class="col-sm-4 invoice-col">
                                    <strong>Ngày nhận việc</strong>: 01/09/2019 <br>
                                    <strong>Ngày thôi việc</strong>: - <br>
                                    <strong>Xác Nhận Ăn Trưa</strong>: Có <br>
                                    <strong>Bảo Hiểm Xã Hội</strong>: 525,000 <br>
                                    <strong>Lương Cơ Bản</strong>: 5,000,000 <br>
                                </div>
                            </div>
                            <br>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <h4>Ngày Công Chi Tiết</h4>
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>X1-Thử Việc</td>
                                            <td>26 Ngày</td>
                                            <td>A1-Thử Việc</td>
                                            <td>26 Ngày</td>
                                            <td>E1-Thử Việc</td>
                                            <td>26 Ngày</td>
                                        </tr>
                                        <tr>
                                            <td>X-Chính Thức</td>
                                            <td>26 Ngày</td>
                                            <td>A-Chính Thức</td>
                                            <td>26 Ngày</td>
                                            <td>Đ4-Đ8</td>
                                            <td>26 Ngày</td>
                                        </tr>
                                        <tr>
                                            <td>E-Ca Đêm</td>
                                            <td>100 Ngày</td>
                                            <td>Nghỉ-HC</td>
                                            <td>0 giờ</td>
                                            <td>Thời Gian Nghỉ Ca Ngày</td>
                                            <td>0 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>Thời Gian Nghỉ Ca Đêm</td>
                                            <td>0 giờ</td>
                                            <td>OT</td>
                                            <td>20 Giờ</td>
                                            <td>Tổng Ngày Công</td>
                                            <td>26 Ngày</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <h4>Lương Chi Tiết</h4>
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>X1-Lương</td>
                                            <td>1,000,000</td>
                                            <td>A1-Lương</td>
                                            <td>1,000,000</td>
                                            <td>E1-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>X-Lương</td>
                                            <td>1,000,000</td>
                                            <td>A-Lương</td>
                                            <td>1,000,000</td>
                                            <td>Đ4-Đ8-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>E-Lương</td>
                                            <td>1,000,000</td>
                                            <td>Số Lượng SP</td>
                                            <td>1,000,000</td>
                                            <td>Thành Tiền SP</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tiền Tăng Ca</td>
                                            <td>1,000,000</td>
                                            <td>Thưởng Năng Suất</td>
                                            <td>1,000,000</td>
                                            <td>Bù Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng Lương</td>
                                            <td>1,000,000</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered" >
                                        <h4>Trợ cấp Chi Tiết</h4>
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Trách Nhiệm</td>
                                            <td>1,000,000</td>
                                            <th>Sản Xuất</th>
                                            <td>1,000,000</td>
                                            <th>Tiền Ăn</th>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>Nhà ở</th>
                                            <td>1,000,000</td>
                                            <th>Xăng</th>
                                            <td>1,000,000</td>
                                            <th>Điện Thoại</th>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>Khác</th>
                                            <td>1,000,000</td>
                                            <th>Tổng Trợ cấp</th>
                                            <td>1,000,000</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped table-bordered" >
                                        <h4>Khoản Trừ Chi Tiết</h4>
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>Bảo Hiểm Xã Hội</th>
                                            <td>1,000,000</td>
                                            <th>Thu Nhập Cá Nhân</th>
                                            <td>1,000,000</td>
                                            <th>Tiền Ăn</th>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>Ứng Lương</th>
                                            <td>1,000,000</td>
                                            <th>Bồi Thường Thiệt Hại</th>
                                            <td>1,000,000</td>
                                            <th>Đồng Phục</th>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <th>Khác</th>
                                            <td>1,000,000</td>
                                            <th>Giảm Trừ Cá Nhân</th>
                                            <td>0</td>
                                            <th>Số Người Phụ Thuộc</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Giảm Trừ Số Người Phụ Thuộc</th>
                                            <td>0</td>
                                            <th>Thu Nhập Chịu Thuế TNCN</th>
                                            <td>0</td>
                                            <th>Tổng Khoản Trừ</th>
                                            <td>1,000,000</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-6">
                                    <p class="lead">Amount Due 30/11/2019</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <th style="width:50%">Tổng Ngày Công:</th>
                                                <td>26</td>
                                            </tr>
                                            <tr>
                                                <th >Tổng Thu Nhập:</th>
                                                <td>10,000,000</td>
                                            </tr>
                                            <tr>
                                                <th>Tổng Khoản Trừ:</th>
                                                <td>2,000,000</td>
                                            </tr>
                                            <tr>
                                                <th>Lương Thực Nhận:</th>
                                                <td>8,000,000</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a class="btn btn-secondary btn-block " href="#" role="button" >Quay lại đầu trang</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            {{--       The SecondChoice
                            <div class="card">
	                            <div class="card-header">
                                    <h3 class="card-title">Ngày Công chi Tiết</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class=" card-body table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>X1-Thử Việc</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>A1-Thử Việc</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>E1-Thử Việc</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>X-Chính Thức</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>A-Chính Thức</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>Đ4-Đ8</td>
                                            <td>100 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>E-Ca Đêm</td>
                                            <td>100 Giờ</td>
                                        </tr>
                                        <tr>
                                            <td>Nghỉ-HC</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Thời Gian Nghỉ Ca Ngày</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Thời Gian Nghỉ Ca Đêm</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>OT</td>
                                            <td>20 giờ</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng Ngày Công</td>
                                            <td>26 Ngày</td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Lương Chi Tiết</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class=" card-body table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>X1-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>A1-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>E1-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>X-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>A-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Đ4-Đ8-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>E-Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Số Lượng SP</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Thành Tiền SP</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tiền Tăng Ca</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Thưởng Năng Suất</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Bù Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                </div>
                                <!-- /.card -->
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Trợ Cấp Chi Tiết</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class=" card-body table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Trách Nhiệm</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Sản xuất</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tiền Ăn</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Nhà ở</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Xăng</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Điện thoại</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Khác</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng trợ cấp</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Khoản Trừ Chi Tiết</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class=" card-body table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th>Thông Tin</th>
                                            <th>Chi Tiết</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Bảo Hiểm Xã Hội</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Thu Nhập Cá Nhân</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Tiền ăn</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Ứng Lương</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Bồi Thường Thiệt Hại</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Đồng Phục</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Khác</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        <tr>
                                            <td>Giảm trừ Cá Nhân</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Số Người Phụ Thuộc</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Giảm Trừ Số Người Phụ Thuộc</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Thu Nhập chịu Thuế TNCN</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Tổng Khoản Trừ</td>
                                            <td>1,000,000</td>
                                        </tr>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- /.col -->
                            </div>
                            <!-- /.card -->
--}}
            @endsection
            @section('script')
                <script>
                    /*Datatable Employee_Details*/
                    let dataEmployee = [
                        {
                            "ID": "1",
                            "MSNV": "0001",
                            "Full Name": "Tiger Nixon",
                            "Position": "System Architect",
                            "Gender": "Male",
                            "Start Date": "01/09/2019",
                            "Time off Work": "-",
                            "Lunch Confirmed": "<div class=\"form-check\"><input class=\"form-check-input\" type=\"checkbox\" checked=\"checked\" value=\"\" id=\"defaultCheck1\"><label class=\"form-check-label\" for=\"defaultCheck1\"></label></div>"
                            ,
                            "Social insurance": "550,000",
                            "Salary": "9,000,000"
                        }
                    ];
                    $('#Employee-Details').DataTable({
                        data: dataEmployee,
                        paging: false,
                        info: false,
                        searching: false,
                        "scrollX": true,
                        columns: [
                            {data: 'ID'},
                            {data: 'MSNV'},
                            {data: 'Full Name'},
                            {data: 'Position'},
                            {data: 'Gender'},
                            {data: 'Start Date'},
                            {data: 'Time off Work'},
                            {data: 'Lunch Confirmed'},
                            {data: 'Social insurance'},
                            {data: 'Salary'}
                        ]
                    });
                    /*Datatable Workdays_Details*/
                    let dataWorkdays = [
                        {
                            "ID": "1",
                            "MSNV": "0001",
                            "Full Name": "Tiger Nixon",
                            "Position": "System Architect",
                            "X1-probationary": "100",
                            "A1-probationary": "100",
                            "E1-probationary": "100",
                            "X-Offical": "100",
                            "A-Offical": "100",
                            "D4-D8": "100",
                            "E-Night": "100",
                            "HC-TimeOff": "100",
                            "Timeoff-Daytime": "100",
                            "Timeoff-NightShift": "100",
                            "OT": "100",
                            "OT-Sunday": "100",
                            "Total Workdays": "26"
                        }
                    ];
                    $('#Workdays-Details').DataTable({
                        data: dataWorkdays,
                        paging: false,
                        searching: false,
                        info: false,
                        "scrollX": true,
                        columns: [
                            {data: 'ID'},
                            {data: 'MSNV'},
                            {data: 'Full Name'},
                            {data: 'Position'},
                            {data: 'X1-probationary'},
                            {data: 'A1-probationary'},
                            {data: 'E1-probationary'},
                            {data: 'X-Offical'},
                            {data: 'A-Offical'},
                            {data: 'D4-D8'},
                            {data: 'E-Night'},
                            {data: 'HC-TimeOff'},
                            {data: 'Timeoff-Daytime'},
                            {data: 'Timeoff-NightShift'},
                            {data: 'OT'},
                            {data: 'OT-Sunday'},
                            {data: 'Total Workdays'}
                        ]
                    });
                    /*Datatable Income-Details*/
                    let dataSalary = [
                        {
                            "ID": "1",
                            "MSNV": "0001",
                            "Full Name": "Tiger Nixon",
                            "Position": "System Architect",
                            "X1-probationary": "1,000,000",
                            "A1-probationary": "1,000,000",
                            "E1-probationary": "1,000,000",
                            "X-Offical": "1,000,000",
                            "A-Offical": "1,000,000",
                            "D4-D8": "1,000,000",
                            "E-Night": "1,000,000",
                            "HC-TimeOff": "1,000,000",
                            "Timeoff-Daytime": "1,000,000",
                            "Timeoff-NightShift": "1,000,000",
                            "OT": "1,000,000",
                            "OT-Sunday": "1,000,000",
                            "Number of Product": "100",
                            "Total amount by product": "2,500,000",
                            "Productivity reward": "1,000,000",
                            "Extra salary": "0",
                            "Overtime wages": "800,000",
                            "Total Salary": "6,000,000"
                        }

                    ];
                    $('#Salary-Details').DataTable({
                        data: dataSalary,
                        paging: false,
                        searching: false,
                        info: false,
                        "scrollX": true,
                        columns: [
                            {data: 'ID'},
                            {data: 'MSNV'},
                            {data: 'Full Name'},
                            {data: 'Position'},
                            {data: 'X1-probationary'},
                            {data: 'A1-probationary'},
                            {data: 'E1-probationary'},
                            {data: 'X-Offical'},
                            {data: 'A-Offical'},
                            {data: 'D4-D8'},
                            {data: 'E-Night'},
                            {data: 'HC-TimeOff'},
                            {data: 'Timeoff-Daytime'},
                            {data: 'Timeoff-NightShift'},
                            {data: 'OT'},
                            {data: 'OT-Sunday'},
                            {data: 'Number of Product'},
                            {data: 'Total amount by product'},
                            {data: 'Productivity reward'},
                            {data: 'Extra salary'},
                            {data: 'Overtime wages'},
                            {data: 'Total Salary'}
                        ]
                    });
                    let AllowanceData = [

                        {
                            "ID": "1",
                            "MSNV": "0001",
                            "Full Name": "Tiger Nixon",
                            "Position": "System Architect",
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
                        searching: false,
                        info: false,
                        columns: [
                            {data: 'ID'},
                            {data: 'MSNV'},
                            {data: 'Full Name'},
                            {data: 'Position'},
                            {data: 'Responsibility'},
                            {data: 'Productions'},
                            {data: 'Eating-fee'},
                            {data: 'Fuel'},
                            {data: 'Housing Cost'},
                            {data: 'Phone'},
                            {data: 'Others'},
                            {data: 'Total Allowances'}
                        ]
                    });
                    /*Datatable Deduction-Details*/
                    let dataDeduction = [
                        {
                            "ID": "1",
                            "MSNV": "0001",
                            "Full Name": "Tiger Nixon",
                            "Position": "System Architect",
                            "Social insurance": "510,000",
                            "Personal income": "510,000",
                            "Eating-fee": "480,000",
                            "Advance Salary": "420,000",
                            "Indemnify damages": "0",
                            "Uniform": "80,000",
                            "Others": "0",
                            "Deduce yourself": "0",
                            "Number of Dependents": "0",
                            "Deduce NoD": "0",
                            "Income taxes": "0",
                            "Total Deductions": "2,000,000"
                        }
                    ];
                    $('#Deduction-Details').DataTable({
                        data: dataDeduction,
                        paging: false,
                        "scrollX": true,
                        searching: false,
                        info: false,
                        columns: [
                            {data: 'ID'},
                            {data: 'MSNV'},
                            {data: 'Full Name'},
                            {data: 'Position'},
                            {data: 'Social insurance'},
                            {data: 'Personal income'},
                            {data: 'Eating-fee'},
                            {data: 'Advance Salary'},
                            {data: 'Indemnify damages'},
                            {data: 'Uniform'},
                            {data: 'Others'},
                            {data: 'Deduce yourself'},
                            {data: 'Number of Dependents'},
                            {data: 'Deduce NoD'},
                            {data: 'Income taxes'},
                            {data: 'Total Deductions'}
                        ]
                    });
                </script>
@endsection
