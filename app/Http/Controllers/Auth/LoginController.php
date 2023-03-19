<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use App\Rules\MatchOldPassword;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }
    /** index page login */
    public function login()
    {
        return view('auth.login');
    }

    /** login with databases */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);

        $remember = $request->has('remember') ? true : false;
        DB::beginTransaction();
        try {
            
            $email     = $request->email;
            $password  = $request->password;

            if (Auth::attempt(['email'=>$email,'password'=>$password], $remember)) {
                /** get session */
                $user = Auth::User();
                   
                Session::put('name', $user->name);
                Session::put('email', $user->email);
                Session::put('jod', $user->jod);
                Session::put('phone', $user->phone);
                Session::put('status', $user->status);
                Session::put('user_type', $user->usertype->user_type_name);
                Session::put('avatar', $user->avatar);
                Session::put('department', $user->department);
                Toastr::success('Login successfully :)','Success');
                if($user->usertype->user_type_name == 'student'){
                  return redirect()->intended('student');  
                }
                if ($user->usertype->user_type_name == 'teacher') {
                    return redirect()->intended('teacher/dashboard');
                }
                if ($user->usertype->user_type_name == 'staff') {
                    return redirect()->intended('user/dashboard');
                }
                if ($user->usertype->user_type_name == 'department master') {
                    return redirect()->intended('teacher/dashboard');
                }
                if ($user->usertype->user_type_name == 'administrator') {
                    return redirect()->intended('dashboard');
                }
                
            } else {
                Toastr::error('fail, WRONG USERNAME OR PASSWORD :)','Error');
                return redirect('login');
            }
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, LOGIN :)','Error');
            return redirect()->back();
        }
    }

    /** logout */
    public function logout( Request $request)
    {
        Auth::logout();
        // forget login session
        $request->session()->forget('name');
        $request->session()->forget('email');
        $request->session()->forget('user_id');
        $request->session()->forget('join_date');
        $request->session()->forget('phone_number');
        $request->session()->forget('status');
        $request->session()->forget('role_name');
        $request->session()->forget('avatar');
        $request->session()->forget('position');
        $request->session()->forget('department');
        $request->session()->flush();

        Toastr::success('Logout successfully :)','Success');
        return redirect('login');
    }

}
