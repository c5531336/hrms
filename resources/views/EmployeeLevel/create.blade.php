@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tạo bậc lương công nhân </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('employee-level.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Chi Nhánh</label>
                            <select name="BranchId" class="form-control">
                                <option value="0">Chọn Chi Nhánh</option>
                                @foreach($branches as $branch)
                                    <option
                                        value="{{$branch->BranchId}}" {{(int)old('BranchId')===$branch->BranchId?'selected':''}}>{{$branch->Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{__('Employee Level Name')}}</label>
                            <input type="text" class="form-control" name="Name"
                                   placeholder="{{__('Employee Level Name')}}" value="{{old('Name')}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="Code">{{__('Employee Level Code')}}</label>
                            <input type="text" class="form-control" name="Code" placeholder="ILKS"
                                   value="{{old('Code')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Level">{{__('Level')}}</label>
                            <input type="text" class="form-control" name="Level" placeholder="1"
                                   value="{{old('Level')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Name">{{__('Basic Salary')}}</label>
                            <input type="text" class="form-control" name="BasicSalary" placeholder="In lụa"
                                   value="{{old('BasicSalary')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Food Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicFoodAllowance" placeholder="10000"
                                   value="{{old('BasicFoodAllowance')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Household Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicHouseholdAllowance" placeholder="10000"
                                   value="{{old('BasicHouseholdAllowance')}}"/>
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Fuel Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicFuelAllowance" placeholder="10000"
                                   value="{{old('BasicFuelAllowance')}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Phone Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicPhoneAllowance" placeholder="10000"
                                   value="{{old('BasicPhoneAllowance')}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Response Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicResponseAllowance" placeholder="10000"
                                   value="{{old('BasicResponseAllowance')}}"
                            />
                        </div>
                        <div class="form-group">
                            <label for="Allowance">{{__('Basic Food Allowance')}}</label>
                            <input type="text" class="form-control" name="BasicFoodAllowance" placeholder="10000"
                                   value="{{old('BasicFoodAllowance')}}"
                            />
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

@if($errors &&(count($errors->all())>0))

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
