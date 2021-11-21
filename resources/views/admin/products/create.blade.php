@extends('layouts.admin.master')
@section('title', 'create')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
    <div class="page-wrapper">
        <div class="container-fluid">
        	<div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Create a new Product</h3>
                        <!-- <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p> --><br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputuname">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Username"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Brand</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control">
                                                <option value="1">Easy</option>
                                                <option value="2">Rechman</option>
                                                <option value="3">Yellow</option>
                                            </select> 
                                        </div>
                                       
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <select class="form-control">
                                                <option value="1">Cat one</option>
                                                <option value="2">Cat two</option>
                                                <option value="3">Cat three</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputpwd1">Quantity</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="number" class="form-control" id="exampleInputpwd1" placeholder="++"> </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="exampleInputpwd1">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="number" class="form-control" id="exampleInputpwd1" placeholder=""> </div>
                                    </div>  
                                    <div class="form-group">
                                        <label for="exampleInputpwd1">Size</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="number" class="form-control" id="exampleInputpwd1" placeholder=""> </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <select class="form-control">
                                                <option value="1">Black</option>
                                                <option value="2">White</option>
                                                <option value="3">Greyee</option>
                                                <option value="4">Red</option>
                                                <option value="5">RGB</option>
                                                <option value="6">Offwhite</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6 col-xs-12">
                                            <div class="white-box">
                                                <h3 class="box-title">F ile Upload1</h3>
                                               <label for="input-file-now">Your so fresh input file — Default version</label>
                                                <input type="file" id="input-file-now" class="dropify" /> 
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                         <div class="col-sm-12 col-md-12 col-xs-12">
                                            <label for="input-file-now">Description</label>
                                            <textarea id="summernote" name="summernote"></textarea>
                                         </div>
                                    </div><br><br>
                                       
                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cancel</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 300
      });
    </script>
@endsection