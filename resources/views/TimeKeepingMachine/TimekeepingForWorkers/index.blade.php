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
            <div class="col-12 table-responsive">
                <table class="table table-striped table-bordered ">
                    <h4>Chấm Công Công Nhân</h4>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MSNV</th>
                            <th>Họ Và Tên</th>
                            <th>Bộ Phận</th>
                            <th>Thời Gian Vào</th>
                            <th>Thời Gian Ra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>0001</th>
                            <th>Nguyễn Văn A</th>
                            <th>HCNS</th>
                            <th><input id="btn1" class="show" type="button" value="Click Me" onclick="GetRealTime1()"><p id="get-time1" style="font-size: 15px; font-weight: bold;"></p></th>
                            <th><input id="btn2" class="show" type="button" value="Click Me" onclick="GetRealTime2()"><p id="get-time2" style="font-size: 15px; font-weight: bold;"></p></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
@section('script')
    <script>
        let GT1_List = document.getElementById('get-time1');
        let CheckIn = new Date();
        let CheckOut = new Date();
        document.getElementById('btn2').hidden = true;
        document.getElementById("Date").innerHTML = Date();
        function GetRealTime1(){
            let GT1= document.getElementById('get-time1');
            let hour = String(CheckIn.getHours());
            let minute = String(CheckIn.getMinutes()).padStart(2, '0');
            let second = String(CheckIn.getSeconds()).padStart(2, '0');
            CheckIn = hour + ':' + minute + ':' + second;
            GT1.innerHTML = CheckIn;
            document.getElementById('btn1').hidden = true;
            document.getElementById('btn2').hidden = false;
        }
        function GetRealTime2(){
            let GT2= document.getElementById('get-time2');
            let hour = String(CheckOut.getHours());
            let minute = String(CheckOut.getMinutes()).padStart(2, '0');
            let second = String(CheckOut.getSeconds()).padStart(2, '0');
            CheckOut = hour + ':' + minute + ':' + second;
            GT2.innerHTML = CheckOut;
            document.getElementById('btn2').hidden = true;
        }

    </script>

@endsection
