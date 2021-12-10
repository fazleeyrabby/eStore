<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RefProductCategories;

class ProductController extends Controller
{
    public function create(){
        $ref_products=RefProductCategories::where('sts',1)->orderBy('id','ASC')->get();
        return view('admin.products.create',compact('ref_products'));
    } 
}
