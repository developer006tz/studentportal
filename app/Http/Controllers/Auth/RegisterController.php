<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register()
    {
        $roles = DB::table('user_types')->get();
        $departments = DB::table('departments')->get();
        return view('auth.register',compact('roles','departments'));
    }
    public function storeUser(Request $request)
    {
       
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        
        if($_POST){
            // dd($request->all());
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'user_type' => 'required|numeric|max:255',
                'department' => 'required|numeric|max:255',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required|same:password',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if($request->hasFile('image')){
                $image = $request->file('image');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $new_name);
                $request->image = $new_name;
            }else{
                $request->image = 'default.png';
            }

            $derided_values = array(
                'name'      => trim(strtoupper($request->name)),
                'avatar'    => $request->image,
                'email'     => trim(strtolower($request->email)),
                'jod' => !empty($request->jod) ? $request->jod : $todayDate,
                'user_type' => $request->user_type,
                'department' => $request->department,
                'password'  => Hash::make($request->password),
                'default_password' => $request->password,
            );

            $user = User::create(
                array_merge($derided_values, [
                    'email_verified_at' => now(),
                ])
            );

            if($user){
                Toastr::success('Create new account successfully :)', 'Success');
                return redirect('login');
            }else{
                Toastr::error('Something went wrong :(', 'Error');
                return redirect()->back();
            }

            // $user->userTypes()->attach($request->usertype);
            // $user->departments()->attach($request->department);

        }else{
            Toastr::error('Something went wrong :(', 'Error');
            return redirect()->back();
        }
    }
}
