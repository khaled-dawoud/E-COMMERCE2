@extends('backend.master')
@section('title' , 'All Products' . ' | ' . env('APP_NAME'))
@section('styles')
<style>
    .table th, .table td {
        vertical-align: middle;
    }
</style>
@stop
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                                        <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">All Products</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-sm-flex align-items-center justify-content-between">
                                    <h6 class="card-title">All Products</h6>
                                    <a class="card-title btn btn-primary" href="{{ route('admin.product.create') }}">Add new Products</a>
                                </div>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>QTY</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </thead>

                                    <tbody>
                                            @foreach($products as $product)
                                        <tr>
                                            <td> {{ $product->id }} </td>
                                            <td> {{ $product->name }} </td>
                                            <td> <img width="80px" src="{{ asset('uploads/images/products/'.$product->image) }}" alt=""> </td>
                                            <td> {{ $product->price }} </td>
                                            <td> {{ $product->sale_price }} </td>
                                            <td>
                                                @if ($product->qty > 20)
                                                    <span class="badge bg-success">{{ $product->qty }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ $product->qty }}</span>
                                                @endif
                                            </td>
                                            <td> {{ $product->category->name}} </td>
                                            <td>
                                                <a href="{{ route('admin.product.edit',$product->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin.product.destroy',$product->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button  onclick="return confirm('are you sure?')" onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm"  type="submit"><i class="fas fa-trash-alt"></i> </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
</div>

@section('scripts')
{{-- Datatable init js --}}
       <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

       <script src="{{ asset('backend/assets/js/app.js') }}"></script>
@stop

                    </div>

                </div>
                <!-- End Page-content -->


            </div>
            <!-- end main content-->
@stop
