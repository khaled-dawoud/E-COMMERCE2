@extends('backend.master')
@section('title' , 'Add New Product' . ' | ' . env('APP_NAME'))
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <h4 class="card-title">Add New Product</h4><br><br>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input name="name" multiple class="form-control" type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input name="image" multiple class="form-control" type="file" id="image">
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                                <div class="col-sm-10">
                                                    <img id="showImage" class="rounded avatar-lg" src="{{ url('uploads/no_image.jpg') }}" alt="Card image cap">
                                                </div>
                                            </div>


                                            {{-- don't forget the js links for text editor --}}
                                            <div class="row mb-3">
                                                <label  class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea id="elm1" name="description"></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-10">
                                                    <input name="price" multiple class="form-control" type="number" placeholder="Price">
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Sale Price</label>
                                                <div class="col-sm-10">
                                                    <input name="sale_price" multiple class="form-control" type="number" placeholder="Sale Price">
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-10">
                                                    <input name="qty" multiple class="form-control" type="number" placeholder="Quantity">
                                                </div>
                                            </div>
                                            <!-- end row -->

                                            <div class="row mb-3">
                                                <label class="form-label">Category</label>
                                                <select name="category_id" class="form-control select2-search-disable">
                                                        <option value="" disabled selected>--Select--</option>
                                                    @foreach ( $categories as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <button type="submit"  class="btn btn-primary mt-5" >Add New Product</button>
                                        </form>
                                </div>
                            </div>
                            </div> <!-- end col -->
                        </div>

                    </div>
                </div>
            </div>
@stop
@section('scripts')
{{-- jquery --}}
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
 <!--tinymce js-->
 <script src="{{ asset('backend/assets/libs/tinymce/tinymce.min.js') }}"></script>

 <!-- init js -->
 <script src="{{ asset('backend/assets/js/pages/form-editor.init.js') }}"></script>
@stop
