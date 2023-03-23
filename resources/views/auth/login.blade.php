@extends('layouts.app')
@section('content')
{{-- get coockie of email --}}


{{-- get coockie of password --}}
    @if (Cookie::get('password'))
        <script>
            $(document).ready(function(){
                alert('ok');
            });
        </script>

    @endif

{{-- message --}}
{!! Toastr::message() !!}
<div class="login-right">
    <div class="login-right-wrap">
        <h1>Welcome to SCS</h1>
        <p class="account-subtitle">New User? <a href="{{ route('register') }}">Register</a></p>
        <h2>Log in</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email<span class="login-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ Cookie::get('email') }}" >
                <span class="profile-views"><i class="fas fa-envelope"></i></span>
            </div>
            <div class="form-group">
                <label>Password <span class="login-danger">*</span></label>
                <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" id="password" value="{{ Cookie::get('password') }}">
                <span class="profile-views feather-eye toggle-password"></span>
            </div>
            <div class="forgotpass">
                <div class="remember-me">
                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                        <input type="checkbox" name="remember">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <a href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>
        </form>
        <div class="login-or">
            <span class="or-line"></span>
            <span class="span-or">&nbsp;</span>
        </div>
        
    </div>
</div>

@endsection
