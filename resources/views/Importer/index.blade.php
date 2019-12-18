@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="card bg-light mt-3">

                <div class="card-header">

                    Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com

                </div>

                <div class="card-body">

                    <form action="{{ route('Importer.TimeKeeping') }}" method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        <label for="Month">{{__('Month')}}</label>
                        <input type="text" name="Month" class="form-control">
                        <label for="file">{{__('Input File')}}</label>
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import User Data</button>

                    </form>

                </div>
            </div>
            <div class="card bg-light mt-3">

                <div class="card-header">

                    Importer For EmployeeLevel

                </div>

                <div class="card-body">

                    <form action="{{ route('Importer.EmployeeLevel') }}" method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import User Data</button>

                    </form>

                </div>

            </div>
        </section>
    </div>
@endsection
@section('script')
   <script>
       @if(session('message'))
        toastr.success('{{session('message')}}');
       @endif
   </script>
@endsection
