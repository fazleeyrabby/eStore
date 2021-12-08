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
                        <!-- <p class="text-muted m-b-30 font-13"> Bootstrap Elements </p> --><br>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputuname">Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                            <input type="text" class="form-control" id="exampleInputuname" placeholder="Product Name"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputpwd1">Price</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="text" class="form-control" id="exampleInputpwd1" placeholder=""> </div>
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
                                         <div class="col-sm-12 col-md-12 col-xs-12">
                                            <label for="input-file-now">Description</label>
                                            <textarea id="description" cols="6" rows="6" value="" class="form-control" name="top_text"></textarea>
                                         </div>
                                    </div>

                                    <div class="form-group">
                                         <div class="col-sm-12 col-md-12 col-xs-12">
                                            <label for="input-file-now">specification</label>
                                            <textarea id="specification" cols="6" rows="6" value="" class="form-control" name="top_text"></textarea>
                                         </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputpwd1">Quantity</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            <input type="number" class="form-control" id="exampleInputpwd1" placeholder="++"> </div>
                                    </div> 
                                     
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6 col-xs-12">
                                            <!-- <div class="white-box">
                                                <h3 class="box-title">F ile Upload1</h3>
                                               <label for="input-file-now">Your so fresh input file — Default version</label>
                                                <input type="file" id="input-file-now" class="dropify" /> 
                                            </div> -->
                                            <form action="#" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple /> 
                                                </div>
                                            </form>
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
    <!-- <script>
      $('#specification').summernote({
        placeholder: 'Specification',
        tabsize: 2,
        height: 300
      });

      $('#description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 300
      });
    </script> -->
@endsection

@section('js')


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>


    <script type="text/javascript">
      $(document).ready(function(){
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
    </script>

    @endsection