@extends('layouts.admin.master')
@section('title', 'create')
@section('content')
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    
    <div class="page-wrapper">
        <div class="container-fluid">
        	<div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Create a new Product</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form>
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select name="product_category" id="product_category" class="form-control">
                                            <option value="0">Select</option>
                                            @foreach ($ref_products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Sub Category</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control" name="sub_categories"  id="sub_categories" >
                                            <option value="0">Select</option>
                                            @foreach ($ref_products as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Product</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control" name="product" id="product" >
                                            <option value="0">Select</option>
                                            @foreach ($ref_products as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cancel</button>
                                    </div><br><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        alert("hiiiii");
        $('#specification').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
        });


    $('#description').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
        });
    })

    $('#product_category').change(function() {
        if ($(this).val() != '') {
           var category = $(this).val();
           alert(category);
        }
    });
</script>
@endsection