<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Useractivityhistory;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users|regex:/(.+)@(.+)\.(.+)/i',
            'contact' => 'required| min:11| max:11',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'date_of_birth' => 'required',
            'agree_term' => 'required'
        ]);

        // return $request->all();
        
        // create user table
        $user = new User;
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->contact =  $request->contact;
        $user->password =  Hash::make($request->password);
        $user->text_pass =  $request->password;
        $user->date_of_birth =  $request->date_of_birth;
        $user->sts = 0;
        $user->save();

        // create user_activity_hstry table
        $userActivityHstry = new Useractivityhistory;
        $clientIP = $request->ip();
        // local server
        // if ($clientIP == '::1') {
        //      $clientIP = '127:0:0:1';
        // }
        
        if( !isset($_SERVER['REMODE_ADDR']) ) {
            $_SERVER['REMODE_ADDR'] = '127.0.0.1';
            $userActivityHstry->ip = $_SERVER['REMODE_ADDR'];
        }else{
            $userActivityHstry->ip = $request->ip();
        } 

        $userActivityHstry->table_name = 'user';
        $userActivityHstry->save();

        return redirect('login');
    }
}
