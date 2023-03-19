<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$userType)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $user = Auth::user();
        switch ($user->usertype->user_type_name) {
            case 'administrator':
                return redirect()->intended('dashboard');
            case 'student':
                return redirect()->intended('student/dashboard');
            case 'lecture':
                return redirect()->intended('teacher/dashboard');
            case 'department master':
                return redirect()->intended('dashboard');
            default:
                return abort(403, 'Unauthorized action.');
        }

    }
}
