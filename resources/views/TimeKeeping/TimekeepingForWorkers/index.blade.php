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
                            <th>Ca làm việc </th>
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
                            <th><select name="aaa" id="xxx">
                                    <option value="12" selected>xxx</option>
                                    <option value="3">yyy</option>
                                </select> </th>
                            <th><input id="btn1" class="show btn1" type="button" value="Click Me" ><p class="get-time1" style="font-size: 15px; font-weight: bold;"></p></th>
                            <th><input id="btn2" class="show btn2" type="button" value="Click Me" style="display: none"><p class="get-time2" style="font-size: 15px; font-weight: bold;"></p></th>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th>0002</th>
                            <th>Nguyễn Văn B</th>
                            <th>HCNS</th>
                            <th><select name="aaa" id="xxx">
                                    <option value="12" selected>xxx</option>
                                    <option value="3">yyy</option>
                                </select> </th>
                            <th><input id="btn1" class="show btn1" type="button" value="Click Me" ><p class="get-time1" style="font-size: 15px; font-weight: bold;"></p></th>
                            <th><input id="btn2" class="show btn2" type="button" value="Click Me" style="display: none"><p class="get-time2" style="font-size: 15px; font-weight: bold;"></p></th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>0003</th>
                            <th>Nguyễn Văn C</th>
                            <th>HCNS</th>
                            <th><select name="aaa" id="xxx">
                                    <option value="12" selected>xxx</option>
                                    <option value="3">yyy</option>
                                </select> </th>
                            <th><input id="btn1" class="show btn1" type="button" value="Click Me" ><p class="get-time1" style="font-size: 15px; font-weight: bold;"></p></th>
                            <th><input id="btn2" class="show btn2" type="button" value="Click Me" style="display: none"><p class="get-time2" style="font-size: 15px; font-weight: bold;"></p></th>
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
        let GT1_List =$('.get-time1');
        let CheckIn = new Date();
        let CheckOut = new Date();
        $('.btn2').hidden = true;
        document.getElementById("Date").innerHTML = Date();
        function GetRealTime1(){
            let CheckIn = new Date();
            let GT1= $('.get-time1').parent().first().siblings().html();
            var currentRow=$(this).closest("tr");
            console.log(currentRow);
            let hour = String(CheckIn.getHours());
            let minute = String(CheckIn.getMinutes()).padStart(2, '0');
            let second = String(CheckIn.getSeconds()).padStart(2, '0');
            CheckIn = hour + ':' + minute + ':' + second;
            GT1.innerHTML = CheckIn;
            $('.btn1').first().hidden = true;
            $('.btn2').hidden = false;
        }
        function GetRealTime2(){
            let CheckOut = new Date();
            let GT2= $('.get-time2');
            let hour = String(CheckOut.getHours());
            let minute = String(CheckOut.getMinutes()).padStart(2, '0');
            let second = String(CheckOut.getSeconds()).padStart(2, '0');
            CheckOut = hour + ':' + minute + ':' + second;
            GT2.innerHTML = CheckOut;
            $('.btn2').hidden = true;
        }
        $('.table').on('click','.btn1',function () {
            let CheckIn = new Date();
            let hour = String(CheckIn.getHours());
            let minute = String(CheckIn.getMinutes()).padStart(2, '0');
            let second = String(CheckIn.getSeconds()).padStart(2, '0');
            CheckIn = hour + ':' + minute + ':' + second;
            let currentRow = $(this).closest("tr");
            let p = currentRow.find(".get-time1");
            let button = currentRow.find('.btn1');
            let button2 = currentRow.find('.btn2');
            button.hide();
            button2.show();
            p.html(CheckIn);
        });
        $('.table').on('click','.btn2',function () {
            let CheckIn = new Date();
            let hour = String(CheckIn.getHours());
            let minute = String(CheckIn.getMinutes()).padStart(2, '0');
            let second = String(CheckIn.getSeconds()).padStart(2, '0');
            CheckIn = hour + ':' + minute + ':' + second;
            let currentRow = $(this).closest("tr");
            let p = currentRow.find(".get-time2");
            let button = currentRow.find('.btn2');
            button.hide();
            p.html(CheckIn);
        })
    </script>

@endsection
