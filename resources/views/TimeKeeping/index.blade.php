@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="card">


            <div class="card-header">
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
            <div class="card-body ">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered" id="TimeKeeping" style="width: 100% !important;">
                        <div class="col-md-12">
                            <h4>
                                <i class="fas fa-globe-asia"></i> Tổng Công
                            </h4>
                        </div>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>MSNV</th>
                                <th>Họ Và Tên</th>
                                <th>Bộ Phận</th>
                                <th>Tổng Giờ</th>
                                <th>Chi Tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=0 @endphp
                        @forelse ($EmployeeTimeKeepingSummaries as $summary)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{$summary->EmployeeId}}</td>
                                <td>{{$summary->Employee->FullName}}</td>
                                <td>{{$summary->Employee->Department->Name}}</td>
                                <td>{{round($summary->TotalWorkingTime,2)}}</td>
                                <td><a class="btn btn-primary"
                                       href="{{route('time-keeping.show',$summary->EmployeeId)}}"
                                       role="button">Details</a></td>
                            </tr>

                            @php ++$i @endphp
                        @empty
                            <p>No users</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#TimeKeeping').DataTable({
                paging: true,
                searching: true,
                "scrollX": true,
                "overflow": true,
                info: true,
                "columnDefs": [
                    {"width": "20%", "targets": 0}
                ]
            }
        );
        $('#TimeKeeping .delete-branch-form>button').on('click', function (e) {
            e.preventDefault();
            if (confirm('Bạn chắc chắn muốn xóa Ca làm việc???')) {
                $(this).parent().submit();
            }
        });
        @if(session('message'))
        toastr.success('{{session('message')}}');
        @endif
    </script>
@endsection
