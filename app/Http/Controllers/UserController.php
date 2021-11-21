<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function update(Request $request){
          // return $aafg = $request->all();
        $edit_user = User::where('id',$request->eUserId)->first();
        $edit_user->contact = $request->contact;
        $edit_user->role = $request->role;
        $edit_user->sts = $request->status;
        $edit_user->save();
        return redirect()->back()->with('success', ' User has been updated successfully'); 
    }

    public function notify($id){
      $users =  User::where('id',$id)->get();
      return view('admin.users.users', compact('users'));
    }

    public function destroy($id) {
      $user = User::find($id);
      $user->sts = '0';
      $user->save();
      //$users =  User::where('sts',1)->orderBy('id','DESC')->paginate(5);
      //$roles = Roles::all();
      //return view('admin.users.users',compact('users','roles'));
      return redirect()->back()->with('success', ' User has been deleted successfully'); 
      }
}
