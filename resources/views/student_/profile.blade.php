@extends('layouts.master')
@section('content')
<style>
    .button {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  border: none;
  background: none;
  color: #0f1923;
  cursor: pointer;
  position: relative;
  padding: 8px;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 14px;
  transition: all .15s ease;
}

.button::before,
.button::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  left: 0;
  height: calc(50% - 5px);
  border: 1px solid #7D8082;
  transition: all .15s ease;
}

.button::before {
  top: 0;
  border-bottom-width: 0;
}

.button::after {
  bottom: 0;
  border-top-width: 0;
}

.button:active,
.button:focus {
  outline: none;
}

.button:active::before,
.button:active::after {
  right: 3px;
  left: 3px;
}

.button:active::before {
  top: 3px;
}

.button:active::after {
  bottom: 3px;
}

#error-msg {
  color: red;
}
#valid-msg {
  color: #00C900;
}
input.error {
  border: 1px solid #FF7C7C;
}
.hide {
  display: none;
}

.button_lg {
  position: relative;
  display: block;
  padding: 10px 20px;
  color: #fff;
  background-color: #0f1923;
  overflow: hidden;
  box-shadow: inset 0px 0px 0px 1px transparent;
}

.button_lg::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 2px;
  background-color: #0f1923;
}

.button_lg::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 4px;
  height: 4px;
  background-color: #0f1923;
  transition: all .2s ease;
}

.button_sl {
  display: block;
  position: absolute;
  top: 0;
  bottom: -1px;
  left: -8px;
  width: 0;
  background-color: #0d6efd;
  transform: skew(-15deg);
  transition: all .2s ease;
}

.button_text {
  position: relative;
}

.button:hover {
  color: #0f1923;
}

.button:hover .button_sl {
  width: calc(100% + 15px);
}

.button:hover .button_lg::after {
  background-color: #fff;
}

</style>
{!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#">
                                    <img @class(['rounded-circle']) @style(['width: 120px','height:120px']) alt="{{ Session::get('name') }}"
                                    @if(isset($student->photo) && !empty($student->photo))
                                        src="{{ asset('uploads/student/'. $student->photo.'') }}" 
                                    @else
                                        src="{{ asset('uploads/student/default.png') }}" 
                                    @endif

                                     />
                                </a>
                            </div>
                            <div class="col ms-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{ Session::get('name') }}</h4>
                                <h6 class="text-muted"><span class="p-1"><i class="fa fa-user-md mr-2" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-user-md" aria-label="fa fa-user-md"></i></span>{{ $user->usertype->user_type_name }}</h6>
                                <div class="user-Location"> <span class="p-1"><i class="ion-map " data-bs-toggle="tooltip" title="" data-bs-original-title="ion-map" aria-label="ion-map"></i></span>{{$student->program->program_name ?? null}}</div>
                                <div class="about-text"><span class="p-1"><i class="fa fa-th-list" data-bs-toggle="tooltip" title="" data-bs-original-title="fa fa-th-list" aria-label="fa fa-th-list"></i></span>{{$student->program->department->dept_name ?? null}}</div>
                            </div>
                            <div class="col-auto profile-btn">
                                <a href="" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link @isset($student) {{_('active')}} @endisset" data-bs-toggle="tab" href="#per_details_tab">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                            </li>
                            @if(empty($student->admission_id))
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#student_update">Complete your profile</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">
                
                    
                
                        <div class="tab-pane fade @isset($student) {{_(' show active')}} @endisset" id="per_details_tab">
                            <div class="row">
                                @isset($student)
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Personal Details</span>
                                                <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i
                                                        class="far fa-edit me-1"></i>Edit</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name :</p>
                                                <p class="col-sm-9">{{ $student->fullname ?? null}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Registration Number :</p>
                                                <p class="col-sm-9">{{ $student->admission_id ?? null}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth :</p>
                                                <p class="col-sm-9">{{ $student->dob ?? null}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email :</p>
                                                <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection"
                                                        class="__cf_email__"
                                                        data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">{{ Session::get('email') }}</a>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile :</p>
                                                <p class="col-sm-9">{{ $student->phone ?? null }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Department :</p>
                                                <p class="col-sm-9">{{ $student->program->department->dept_name ?? null }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Programme :</p>
                                                <p class="col-sm-9">{{ $student->program->program_name ?? null }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted text-sm-end mb-0">Nationality :</p>
                                                <p class="col-sm-9 mb-0">@if(($country->iso)=='TZ')<span class="p-1"><i class="flag flag-tz" data-bs-toggle="tooltip" title="" data-bs-original-title="flag flag-tz" aria-label="flag flag-tz"></i></span>@endif{{$country->name ?? null}}</p>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                @endisset
                                <div class="col-lg-3">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Account Status</span>
                                                <a class="edit-link" href="#"><i class="far fa-edit me-1"></i>Edit</a>
                                            </h5>
                                            
                                            <button class="btn {{$student->status ?? null==1 ? 'btn-success':'btn-danger'}}" type="button"><i
                                                    class="fe fe-check-verified"></i> {{$student->status ?? null == 1 ? 'Active': 'Disabled'}}</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Courses</span>
                                                <a class="edit-link" href="#"><i class="far fa-edit me-1"></i>Edit</a>
                                            </h5>
                                            <div class="skill-tags">
                                                <span>{{_('GS')}}</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{-- @endempty
                    
                @endisset --}}
                        <div id="password_tab" class="tab-pane fade">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Change Password</h5>
                                    <div class="row">
                                        <div class="col-md-10 col-lg-6">
                                            <form action="{{ route('change/password') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password"
                                                        class="form-control @error('current_password') is-invalid @enderror"
                                                        name="current_password" value="{{ old('current_password') }}">
                                                    @error('current_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password"
                                                        class="form-control @error('new_password') is-invalid @enderror"
                                                        name="new_password" value="{{ old('new_password') }}">
                                                    @error('new_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password"
                                                        class="form-control @error('new_confirm_password') is-invalid @enderror"
                                                        name="new_confirm_password"
                                                        value="{{ old('new_confirm_password') }}">
                                                    @error('new_confirm_password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- student info update --}}
                        <div id="student_update" class="tab-pane fade @empty($student) {{_('show active')}} @endempty">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card comman-shadow">
                                        <div class="card-body">
                                            <form action="{{ route('student/save') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="form-title student-info">Student Information <span><a
                                                                    href="javascript:;"><i
                                                                        class="feather-more-vertical"></i></a></span></h5>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                    <label>Full name</label>
                                                    <input type="text" readonly
                                                        class="form-control @error('fullname') is-invalid @enderror"
                                                        name="fullname" value="{{ $name }}">
                                                    @error('fullname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Registration Number<span class="login-danger">*</span></label>
                                                            <input type="text"
                                                        class="form-control @error('admission_id') is-invalid @enderror"
                                                        name="admission_id" value="{{ old('admission_id') }}">
                                                                @error('admission_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                            <label>Gender <span class="login-danger">*</span></label>
                                            <select class="form-control select  @error('gender') is-invalid @enderror" name="gender">
                                                <option selected disabled>Select Gender</option>
                                                <option value="Female" {{ old('gender') == 'Female' ? "selected" :"Female"}}>Female</option>
                                                <option value="Male" {{ old('gender') == 'Male' ? "selected" :""}}>Male</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms calendar-icon">
                                                            <label>Date Of Birth <span
                                                                    class="login-danger">*</span></label>
                                                            <input class="form-control datetimepicker @error('dob') is-invalid @enderror" type="text" 
                                                                  placeholder="DD-MM-YYYY" name="dob" value="{{old('dob')}}">
                                                                @error('dob')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Nationality<span class="login-danger">*</span></label>
                                                            <select class="programs-select select form-control @error('nationality') is-invalid @enderror" name="nationality" id="nationality" style="width: 100%;" >
                                                                <option selected >{{__('select country')}}</option>
                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->id }}" {{ old( $country->id) == $country->id ? 'selected' : '' }}>
                                                                        {{ $country->name }}
                                                                    </option>
                                                                    @endforeach
                                                            </select>
                                                            @error('nationality')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Maritial status<span class="login-danger">*</span></label>
                                                            
                                                                <select class="form-control select @error('maritual_status') is-invalid @enderror" name="maritual_status">
                                                                <option selected value="Single">Single</option>
                                                                <option  value="Married">Married</option>
                                                                    
                                                            </select>
                                                                @error('maritual_status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Department<span class="login-danger">*</span></label>
                                                            <select class="form-control select @error('department') is-invalid @enderror" name="department" disabled>
                                                                <option selected value="{{$user->department_table->dept_id}}">{{$user->department_table->dept_code}}</option>
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
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Programme<span class="login-danger">*</span></label>
                                                            <select class="programs-select select form-control @error('program_id') is-invalid @enderror" name="program_id" id="programs" style="width: 100%;" >
                                                                <option selected >{{__('select program')}}</option>
                                                                    @foreach ($programs as $program)
                                                                        <option value="{{ $program->program_id }}" {{ old( $program->program_id) == $program->program_id ? 'selected' : '' }}>
                                                                        {{ $program->program_code }}
                                                                    </option>
                                                                    @endforeach
                                                            </select>
                                                            @error('program_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>E-Mail <span class="login-danger">*</span></label>
                                                            <input class="form-control @error('email') is-invalid @enderror" type="text"
                                                                placeholder="Enter Email Address" name="email" value="{{$email}}" readonly>
                                                                @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group local-forms">
                                                            <label>Phone <span class="login-danger">*</span></label>
                                                            <input class="form-control @error('phone') is-invalid @enderror" type="tel"
                                                                placeholder="Enter Phone" name="phone" id="phone" value="{{old('phone')}}" >
                                                                <span id="valid-msg" class="hide">✓ Valid</span>
                                                                <span id="error-msg" class="hide"></span>
                                                                @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                    <div class="col-12 col-sm-4">
                                                        <div class="form-group students-up-files">
                                                            <label>Upload Student Photo</label>
                                                            {{-- <div class="uplod">
                                                                <label class="file-upload  image-upbtn mb-0">
                                                                    Choose unyama <input type="file" name="photo">
                                                                </label>
                                                            </div> --}}
                                                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="formFile" >
                                                            @error('photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="student-submit">
                                                            <button class="button" type="submit">
                                                                <span class="button_lg">
                                                                    <span class="button_sl"></span>
                                                                    <span class="button_text">Update profile</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end student info update --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
    $('#program').on('change', function() {
  var inputValue = $(this).val();
  
  $.ajax({
    url: '{{ route('program/search') }}',
    type: 'GET',
    data: {inputValue: inputValue},
    dataType: 'json',
    success: function(data) {
      var program = $('#program');
      program.empty();
      console.log(data);
      $.each(data, function(key, value) {
        program.append('<option value="' + value.id + '">' + value.name + '</option>');
      });
    }
  });
});

</script> --}}

<script>
    $(function () {
        $('.programs-select').select2();
        
    })
</script>
<script>
    

// var input = document.querySelector("#phone"),
//   errorMsg = document.querySelector("#error-msg"),
//   validMsg = document.querySelector("#valid-msg");

// // here, the index maps to the error code returned from getValidationError - see readme
// var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// // initialise plugin
// var iti = window.intlTelInput(input, {
//     hiddenInput: "full_number",
//     preferredCountries: ["tz"],
//     utilsScript: "{{ URL::to('assets/plugins/intlinput/js/utils.js') }}",


// });

// var reset = function() {
//   input.classList.remove("error");
//   errorMsg.innerHTML = "";
//   errorMsg.classList.add("hide");
//   validMsg.classList.add("hide");
// };

// // on blur: validate
// input.addEventListener('blur', function() {
//   reset();
//   if (input.value.trim()) {
//     if (iti.isValidNumber()) {
//       validMsg.classList.remove("hide");
//     } else {
//       input.classList.add("error");
//       var errorCode = iti.getValidationError();
//       errorMsg.innerHTML = errorMap[errorCode];
//       errorMsg.classList.remove("hide");
//     }
//   }
// });

// // on keyup / change flag: reset
// input.addEventListener('change', reset);
// input.addEventListener('keyup', reset);

// //on country change
// iti.addEventListener("countrychange", function() {
//     var countryData = iti.getSelectedCountryData();
//     console.log(countryData);
//     var country_code = countryData.dialCode;
//     var country_name = countryData.name;
//     var country_iso = countryData.iso2;
//     $('#country_code').val(country_code);
//     $('#country_name').val(country_name);
//     $('#country_iso').val(country_iso);
// });

$(document).ready(function() {
  var input = $("#phone"),
      errorMsg = $("#error-msg"),
      validMsg = $("#valid-msg"),
      errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

  var iti = window.intlTelInput(input[0], {
    hiddenInput: "full_number",
    preferredCountries: ["tz"],
    utilsScript: "{{ URL::to('assets/plugins/intlinput/js/utils.js') }}",
  });

  var reset = function() {
    input.removeClass("error");
    errorMsg.html("").addClass("hide");
    validMsg.addClass("hide");
  };

  input.on('blur', function() {
    reset();
    if (input.val().trim()) {
      if (iti.isValidNumber()) {
        validMsg.removeClass("hide");
      } else {
        input.addClass("error");
        var errorCode = iti.getValidationError();
        errorMsg.html(errorMap[errorCode]).removeClass("hide");
      }
    }
  });

  input.on('change keyup', reset);

  iti.on("countrychange", function() {
    var countryData = iti.getSelectedCountryData();
    var country_code = countryData.dialCode;
    var country_name = countryData.name;
    var country_iso = countryData.iso2;
    $('#country_code').val(country_code);
    $('#country_name').val(country_name);
    $('#country_iso').val(country_iso);
  });
});




</script>

<script>
  const phoneNumberInput = document.getElementById("phone");
  phoneNumberInput.addEventListener("keydown", function(event) {
    const firstDigit = phoneNumberInput.value.charAt(0);
    const keyCode = event.keyCode || event.which;
    if (firstDigit >= "0" && firstDigit <= "5") {
      if (keyCode >= 48 && keyCode <= 57) {
        event.preventDefault();
      }
    }
  });
  phoneNumberInput.addEventListener("keypress", function(event) {
    const keyCode = event.keyCode || event.which;
    if (keyCode < 48 || keyCode > 57) {
      event.preventDefault();
    }
  });
  phoneNumberInput.addEventListener("input", function(event) {
    const phoneNumber = phoneNumberInput.value;
    if (phoneNumber.length > 9) {
      phoneNumberInput.value = phoneNumber.slice(0, 9);
    }
    if (phoneNumber.charAt(0) >= "0" && phoneNumber.charAt(0) <= "5") {
      phoneNumberInput.value = phoneNumber.slice(1);
    }
  });

  //jquery version
  /*
  const phoneNumberInput = $("#phone");
phoneNumberInput.on("keydown", function(event) {
  const firstDigit = phoneNumberInput.val().charAt(0);
  const keyCode = event.keyCode || event.which;
  if (firstDigit >= "0" && firstDigit <= "5") {
    if (keyCode >= 48 && keyCode <= 57) {
      event.preventDefault();
    }
  }
});
phoneNumberInput.on("keypress", function(event) {
  const keyCode = event.keyCode || event.which;
  if (keyCode < 48 || keyCode > 57) {
    event.preventDefault();
  }
});
phoneNumberInput.on("input", function(event) {
  const phoneNumber = phoneNumberInput.val();
  if (phoneNumber.length > 9) {
    phoneNumberInput.val(phoneNumber.slice(0, 9));
  }
  if (phoneNumber.charAt(0) >= "0" && phoneNumber.charAt(0) <= "5") {
    phoneNumberInput.val(phoneNumber.slice(1));
  }
});*/
</script>
@endsection


