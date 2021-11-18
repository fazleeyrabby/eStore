<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function updateUser(Request $request){
          // return $aafg = $request->all();
        $edit_user = User::where('id',$request->eUserId)->first();
        $edit_user->contact = $request->contact;
        $edit_user->role = $request->role;
        $edit_user->sts = $request->status;
        $edit_user->save();
        return redirect()->back()->with('success', ' User has been updated successfully'); 
    }

    public function notifyUser($id){
      $users =  User::where('id',$id)->get();
      return view('admin.user.all', compact('users'));
    }
}
