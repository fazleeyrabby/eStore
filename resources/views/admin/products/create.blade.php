@extends('layouts.admin.master')
@section('title', 'create')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
        	<div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Create a new Product</h3>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select name="product_category" id="product_category" class="form-control">
                                            <option value="0">Select</option>
                                            @foreach ($ref_categories as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                            </select>
                                            @csrf
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label class="control-label">Sub Category</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control" name="sub_categories"  id="sub_categories" >
                                            <option value="0">Select</option>
                                            @foreach ($ref_categories as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            </select>
                                            @csrf
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Product</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control" name="product" id="product" >
                                            <option value="0">Select</option>
                                            @foreach ($ref_categories as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="button" id="generate_form" class="btn btn-success waves-effect waves-light m-r-10">Generate</button> @csrf
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="input_str" class="col-sm-12 col-xs-12">
                                            

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
   
    })

    $('#product_category').change(function() {
        if ($(this).val() != '') {
           var category = $(this).val();
           var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('product.ref_sub_cat') }}",
                method: "POST",
                data: {
                    _token,
                    category
                },
                success: function(result) {
                    $('#sub_categories').html(result);
                }
            })
        }
    });

    $('#sub_categories').change(function() {
        if ($(this).val() != '') {
           var category = $("#product_category").val();
           var sub_category = $(this).val();
           var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('product.ref_product') }}",
                method: "POST",
                data: {
                    _token,
                    category,
                    sub_category
                },
                success: function(result) {
                    $('#product').html(result);
                }
            })
        }
    });

    $('#generate_form').click(function() {
        var sub_category = $("#sub_categories").val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('product.inputview') }}",
            method: "POST",
            data: {
                _token,
                sub_category
            },
            success: function(result) {
                $('#input_str').html(result);
            }
        })
    });
</script>
@endsection