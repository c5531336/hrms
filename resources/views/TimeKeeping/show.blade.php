@extends('layouts.app')
@section('content')
    <time-keeping-component :Employee-Info="{{ $EmployeeInfo }}"
                            :Employee-Detail="{{$EmployeeDetails}}"
                            index-route="{{route('time-keeping.index')}}"
    ></time-keeping-component>
@endsection
@section('script')
    <script>
    @if(session('message'))
        toastr.success('{{session('message')}}');
    @endif
    </script>
@endsection
