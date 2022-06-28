@extends('backend.master')
@section('title' , 'All Categories' . ' | ' . env('APP_NAME'))
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
                            <h4 class="mb-sm-0">All Categories</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2 d-sm-flex align-items-center justify-content-between">
                                    <h6 class="card-title">All Categories</h6>
                                    <a class="card-title btn btn-primary" href="{{ route('admin.category.create') }}">Add new Category</a>
                                </div>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Parent</th>
                                        <th>Products Count</th>
                                        <th>Actions</th>
                                    </thead>

                                    <tbody>
                                            @foreach($categories as $category)
                                        <tr>
                                            <td> {{ $category->id }} </td>
                                            <td> {{ $category->name }} </td>
                                            <td> <img width="100px" src="{{ asset('uploads/images/category/'.$category->image) }}" alt=""> </td>
                                            <td> {{ $category->parent->name }} </td>
                                            <td> <span class="badge bg-primary">{{ $category->products->count() }}</span> </td>
                                            <td>
                                                <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin.category.destroy',$category->id) }}" method="POST" class="d-inline">
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
