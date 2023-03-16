
@extends('layouts.app')
@section('content')
@php
    use Carbon\Carbon;
@endphp
    <div class="login-right">
        <div class="login-right-wrap">
            <h1>Sign Up</h1>
            <p class="account-subtitle">Enter details to create your account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name <span class="login-danger">*</span></label>
                    {{-- include old value in value attribute --}}
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <label>Email <span class="login-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <input type="hidden" name="jod" value="{{ Carbon::now() }}">
                <input type="hidden" name="avatar" value="{{__('default.png')}}">
                {{-- insert defaults --}}
                <div class="form-group local-forms">
                    <label>{{__('User type')}}<span class="login-danger">*</span></label>
                    <select class="form-control select @error('user_type') is-invalid @enderror" name="user_type" id="user_type" value="{{old('user_type')}}">
                        <option selected disabled>__choose__</option>
                        @foreach ($roles as $user_type)
                            <option value="{{ $user_type->id }}" {{ old('user_type') == $user_type->id ? 'selected' : '' }}>
                            {{ $user_type->user_type_name }}
                        </option>
                        @endforeach
                    </select>
                    @error('user_type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group local-forms">
                    <label>{{__('Department')}}<span class="login-danger">*</span></label>
                    <select class="form-control select @error('department') is-invalid @enderror" name="department" id="department" value="{{old('department')}}">
                        <option selected disabled>__choose__</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->dept_id }}" {{ old('department') == $department->dept_id ? 'selected' : '' }}>
                            {{ $department->dept_code }}
                        </option>
                        @endforeach
                    </select>
                    @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                
                <div class="form-group">
                    <label>Password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-input  @error('password') is-invalid @enderror" name="password" value="{{old('password')}}">
                    <span class="profile-views feather-eye toggle-password"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <label>Confirm password <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-confirm @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{old('password_confirmation')}}">
                    <span class="profile-views feather-eye reg-toggle-password"></span>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a></div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                </div>
            </form>
            <div class="login-or">
                <span class="or-line"></span>
                <span class="span-or">or</span>
            </div>
            <div class="social-login">
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
@endsection
