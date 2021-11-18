<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

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

        $users = User::orderBy('id','DESC')->paginate(5);
        $roles = Roles::all();
        return view('admin.user.all',compact('users','roles'));
    }
}
