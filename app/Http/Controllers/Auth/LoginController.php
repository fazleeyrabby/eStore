<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::dashboard;
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        // return $request->all();
        $request->validate([
            'email' => 'required|string|min:3',
            'password' => 'required|string|min:6',
        ]);

        $login = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // return $login;
        $credentials = $request->only($login, 'password');

        if (Auth::attempt($credentials)) {
            // return 'asdddsa';
            $downline_updated = strtotime(date(Auth::user()->downline_updated));
            // return $downline_updated;
            $today = strtotime(date('Y-m-d'));
            
            // if($downline_updated || (($today - $downline_updated) / 86400 ) > 7){
               
                // $downline = $this->countDownline(0, Auth::user()->id);
         
                // DB::table('users')
                // ->where('id', Auth::user()->id)
                // ->update(['downline' => $downline, 'downline_updated' => date('Y-m-d')]);
            // }
            // return redirect()('admin/dashboard');
            // return redirect('admin/dashboard');

            if(Auth::user()->role === 'admin'){
                // return redirect()->intended('admin');
                return redirect()->intended('dashboard');
            }
        }

        

        return redirect('login')->with('error', 'Opes! You have entered invalid credentials');
    }
}
