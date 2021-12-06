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
      $users =  User::where('id',$id)->paginate(1);
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

    public function searchData(Request $request) {
      // if($request->ajax()){
      //   $columnName = $request->columnName;
      //   $key = $request->filterValue;
      //   // $query = $request->get('query');
      //   if($columnName != ''){
      //    $data = User::where('name','like','%'.$key.'%')
      //                 ->orwhere('email','like','%'.$key.'%')
      //                 ->orwhere('contact','like','%'.$key.'%')
      //                 ->orderBy('id','DESC')
      //                 ->get();

      //   }
      //   else{
      //     $data =  User::orderBy('id','DESC')->get();
      //   //  return $users = $users->paginate(12);
      //   }
      //   $total_row = $data->count();
      //   if($total_row > 0){
      //     $output = '';
      //     foreach($data as $row){
      //       $output .= '
      //         <tr>
      //           <td>'.$row->name.'</td>
      //           <td>'.$row->email.'</td>
      //           <td>'.$row->role.'</td>
      //           <td>'.$row->contact.'</td>
      //           <td>'.$row->sts.'</td>
      //         </tr>
      //       ';
      //     }
      //   }else{
      //     $output = '
      //       <tr>
      //         <td align="center" colspan="5">No Data Found</td>
      //       </tr>
      //     ';
      //   }
      //   $data = array(
      //     'table_data'     => $output,
      //     'total_data'     => $total_row,
      //   );

      //   echo json_encode($data);

      // }

      $columnName = $request->columnName;
      $key = $request->filterValue;
      // echo $columnName.'|'.$filterValue;exit;
      // $users =  User::where('sts',1)->orderBy('id','DESC');
      $users =  User::orderBy('id');

      if(!empty($columnName)){
        if($columnName == 'name'){
          $users->where('name','like','%'.$key.'%');
        }elseif($columnName == 'email'){
          $users->where('email','like','%'.$key.'%');
        }elseif($columnName == 'contrat'){
          $users->where('contact','like','%'.$key.'%');
        }
      return  $users = $users->paginate(12);
      }
      $roles = Roles::all();
      // return redirect('admin/user')->with('users',$users)->with('roles',$roles);
      // return redirect()->route('/user', compact('users','roles'));
      // return redirect()->route('user', [$users]);
      // return redirect('/user');
      // return redirect()->url('/user');
      // return redirect('user')->back()->with('users',$users);
      // return view('admin.users.users',compact('users','roles'));
      // return response()->view('admin.users.users', compact('users','roles'));
      // return response()->json([
      //   'view' => compact('users','roles')
      // ]);


      $data = array(
            'users'     => $users,
            'roles'     => $roles,
          );
  
          echo json_encode($data);
      
    }


}
