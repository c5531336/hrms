@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            @extends('layouts.app')
            @section('content')
                <div class="content-wrapper">
                    <section class="content">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">{{__('Create TimeShift')}}'</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('time-shift.store')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{__('Branch')}}</label>
                                        <select name="BranchId" class="form-control">
                                            @foreach($branches as $branch)
                                                <option value="{{$branch->BranchId}}" {{old('BranchId')===$branch->BranchId?'selected':''}}>{{$branch->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Name">{{__('TimeShift Name')}}</label>
                                        <input type="text" class="form-control" name="Name" placeholder=""
                                               value="{{old('Name')}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="FoodAllowance">{{__('Food Allowance')}}</label>
                                        <input type="text" class="form-control" name="FoodAllowance" placeholder=""
                                               value="{{old('FoodAllowance')}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="TimeAllowance">{{__('Time Allowance')}}</label>
                                        <input type="text" class="form-control" name="TimeAllowance" placeholder=""
                                               value="{{old('TimeAllowance')}}"/>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{__('Create')}} </button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            @endsection
            @if($errors &&(count($errors->all())>0))
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

        </section>
    </div>
@endsection
