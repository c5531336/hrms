@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tạo mới chi nhánh</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('branch.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="BranchCode">Mã Chi Nhánh</label>
                            <input type="text" class="form-control" name="BranchCode" placeholder="VL"
                                   value="{{old('BranchCode')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Name">Tên Chi Nhánh</label>
                            <input type="text" class="form-control" name="Name" placeholder="Vĩnh Lộc"
                                   value="{{old('Name')}}"/>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tạo </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
@if($errors &&($errors->has('BranchCode')|| $errors->has('Name')))
@section('script')
    <script>
        toastr.options.showDuration=800;
        $(document).ready(function () {
            @foreach ($errors->all() as $message)
                toastr.error('{{$message}}');
            @endforeach
        })
    </script>
@endsection
@endif
