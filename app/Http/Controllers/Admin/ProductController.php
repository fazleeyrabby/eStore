<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RefProductCategory;
use App\Models\RefBrands;

class ProductController extends Controller
{
    public function create(){
        $data = array(
            "ref_products" => RefProductCategory::where('sts',1)->orderBy('id','ASC')->get(),
            "ref_brands" => RefBrands::where('sts',1)->orderBy('id','ASC')->get()
          );
        //dd($data);
        return view('admin.products.create',$data);
    } 
}
