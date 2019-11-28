@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tạo mới Phòng ban</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('department.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Chi Nhánh</label>
                            <select name="BranchId" class="form-control">
                                @foreach($branches as $branch)
                                    <option value="{{$branch->BranchId}}" {{$department->BranchId===$branch->BranchId?'selected':''}}>{{$branch->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Phòng ban</label>
                            <select name="ParentDepartmentId" class="form-control">
                                <option value="0">Phòng ban mới</option>
                                @foreach($parents as $parent)
                                    <option value="{{$parent->DepartmentId}}" {{$department->ParentDepartmentId===$parent->DepartmentId?'selected':''}}>{{$parent->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="DepartmentCode">Mã Phòng ban</label>
                            <input type="text" class="form-control" name="DepartmentCode" placeholder="ILKS"
                                   value="{{$department->DepartmentCode}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Name">Tên Phòng ban</label>
                            <input type="text" class="form-control" name="Name" placeholder="In lụa"
                                   value="{{$department->Name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Allowance">Trợ cấp</label>
                            <input type="text" class="form-control" name="Allowance" placeholder="10000"
                                   value="{{$department->Allowance}}"/>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@if($errors &&($errors->has('DepartmentCode')|| $errors->has('Name') || $errors->has('Allowance')))
@section('script')
    <script>
        toastr.options.showDuration = 800;
        $(document).ready(function () {
            @foreach ($errors->all() as $message)
            toastr.error('{{$message}}');
            @endforeach
        })
    </script>
@endsection
@endif
