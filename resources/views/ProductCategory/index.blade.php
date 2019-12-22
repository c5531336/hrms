@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!--Open Row-->
                <div class="row">
                    <div class="card bg-light mt-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-9">
                                    {{__('TimeShift List')}}
                                </div>
                                <div class="col-md-3">
                                    <a name="" id="" class="btn btn-success"
                                       href="{{route('time-shift.create')}}" role="button">Tạo mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--Open Table-->
                            <table id="TimeShift" class="table table-bordered table-hover ">
                                <thead>
                                <tr>
                                    <th>{{__('Product Code')}}</th>
                                    <th>{{__('Product Name')}}</th>
                                    <th>{{__('Product Price')}}</th>
                                    <th>{{__('Product Unit')}}</th>
                                    <th>{{__('Function')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($products) && $products->count()>0)
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->ProductCode}}</td>
                                            <td>{{$product->Name}}</td>
                                            <td>{{$product->Price}}</td>
                                            <td>{{$product->unit}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a
                                                        class="btn btn-outline-info"
                                                        href="{{route('product.edit',$product->ProductCategoryId)}}"
                                                        role="button">Edit</a>
                                                    <form class="delete-branch-form" method="post"
                                                          action="{{route('product.destroy',$product->ProductCategoryId)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button"
                                                                class="btn btn-outline-danger">
                                                            Xóa
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <!--Close Table-->
                        </div>
                        <!--Close Card body-->
                    </div>
                </div>
                <!--Close Row-->
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $('#TimeShift').DataTable({
                paging: true,
                searching: true,
                "scrollX": true,
                "overflow": true,
                info: true
            }
        );
        $('#TimeShift .delete-branch-form>button').on('click', function (e) {
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
