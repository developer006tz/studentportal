
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="time-table.html">Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Edit User</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                                            <input type="hidden" class="form-control" name="user_id" value="{{ $users->user_id }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="email" value="{{ $users->email }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Phone Number <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="phone_number" value="{{ $users->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Status <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="status">
                                                <option disabled>Select Status</option>
                                                <option value="Active" {{ $users->status == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="Disable" {{ $users->status == 'Disable' ? 'selected' : '' }}>Disable</option>
                                                <option value="Inactive" {{ $users->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Role Name <span class="login-danger">*</span></label>
                                            <select class="form-control select" name="role_name">
                                                <option disabled>Select Role Name</option>
                                                <option value="Admin" {{ $users->role_name == 'Admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="Super Admin" {{ $users->role_name == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                                                <option value="Normal User" {{ $users->role_name == 'Normal User' ? 'selected' : '' }}>Normal User</option>
                                                <option value="Teachers" {{ $users->role_name == 'Teachers' ? 'selected' : '' }}>Teachers</option>
                                                <option value="Student" {{ $users->role_name == 'Student' ? 'selected' : '' }}>Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Profile <span class="login-danger">*</span></label>
                                            <input type="file" class="form-control" name="avatar" value="{{ $users->avatar }}">
                                            <div class="user-img" style="margin-top: -25px;">
                                                <img class="rounded-circle" src="{{ URL::to('/images/'. $users->avatar) }}">
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidden_avatar" value="{{ $users->avatar }}">
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Position <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="position" value="{{ $users->position }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Department <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="department" value="{{ $users->department }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Updated Date <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="updated_at" value="{{ $users->updated_at }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
