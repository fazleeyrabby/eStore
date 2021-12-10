<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RefProductCategories;
use App\Models\Admin\RefProductSubCategories;
use App\Models\Admin\RefProducts;

class ProductController extends Controller
{
    public function create(){
        $ref_categories=RefProductCategories::where('sts',1)->orderBy('id','ASC')->get();
        return view('admin.products.create',compact('ref_categories'));
    }

    public function ref_sub_category(Request $request) {
        $ref_sub_categories=RefProductSubCategories::where('cat_id',$request->category)
                            ->where('sts','1')
                            ->orderBy('id','ASC')
                            ->get();

        $str = '<option value="0">Select</option>';
        foreach($ref_sub_categories as $row)
        {
        $str .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        echo $str;
    }

    public function ref_product(Request $request) {
        $ref_product=RefProducts::where('cat_id',$request->category)
                            ->where('sub_cat_id',$request->sub_category)
                            ->where('sts','1')
                            ->orderBy('id','ASC')
                            ->get();

        $str = '<option value="0">Select</option>';
        foreach($ref_product as $row)
        {
        $str .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        echo $str;
    }

    function productInput(Request $request) {
        $str ='';
        if($request->sub_category==1) {
        $str.='<form>
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
                            <div class="col-sm-12 col-md-12 col-xs-12">
                            <label for="input-file-now">Description</label>
                            <textarea id="description" cols="6" rows="20" value="" class="form-control" name="top_text"></textarea>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                            <label for="input-file-now">Specification</label>
                            <textarea id="specification" cols="6" rows="20" value="" class="form-control" name="top_text"></textarea>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputpwd1">Quantity</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
                            <input type="number" class="form-control" id="exampleInputpwd1" placeholder="++"> </div>
                    </div> 
               </form>';
        }
        echo $str;
    }

    public function store(Request $request){
       return $request;
    }

}
