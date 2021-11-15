<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        return view('layouts.admin.dashboard');
    } 

    public function create(){
        return view('admin.product.create');
    } 

    public function all_product(){
        return view('admin.product.all');
    } 

    public function allUser(Request $request){
        $request->session()->forget(['menu']);
        $request->session()->put(['menu'=>'allUser']);

        $users = User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('users'));
    }
}