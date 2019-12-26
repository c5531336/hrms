@extends('layouts.app')
@section('content')
    <time-keeping-component :Employee-Info="{{ $EmployeeInfo }}"
                            :Employee-Detail="{{$EmployeeDetails}}"
                            index-route="{{route('time-keeping.index')}}"
    ></time-keeping-component>
@endsection
