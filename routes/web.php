<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student\CompleteProfile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

// Route::group(['middleware'=>'auth'],function()
// {
//     Route::get('dashboard',function()
//     {
//         return view('home');
//     });
    
// });

// Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- main dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('dashboard', function () {
        switch (Auth::user()->usertype->user_type_name) {
            case 'administrator':
                return app()->call('App\Http\Controllers\HomeController@index');
                break;
            case 'lecture':
            case 'staff':
            case 'department_master':
                return app()->call('App\Http\Controllers\HomeController@teacherDashboardIndex');
                break;
            case 'student':
                return app()->call('App\Http\Controllers\HomeController@studentDashboardIndex');
                break;
            default:
                return redirect()->route('login');
                break;
        }
    })->middleware('auth')->name('dashboard');
});

// ----------------------------- user controller -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');

});


// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ admin student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student

});

// ------------------------ user student -------------------------------//
Route::controller(CompleteProfile::class)->group(function () {
    Route::get('student/complete/profile', 'index')->middleware('auth')->name('profile'); // complete profile student
    Route::get('student/profile/page', 'index')->middleware('auth')->name('student/profile/page'); // general peofile url
    Route::post('student/save', 'store')->middleware('auth')->name('student/save'); // save complete profile student
    Route::get('program/search', 'getPrograms')->middleware('auth')->name('program/search'); // edit complete profile student
    Route::post('student/complete/profile/update', 'completeProfileUpdate')->name('student/complete/profile/update'); // update complete profile student
    Route::get('student/complete/profile/view', 'completeProfileView')->middleware('auth')->name('student/complete/profile/view'); // view complete profile student
    Route::get('student/complete/profile/delete', 'completeProfileDelete')->middleware('auth')->name('student/complete/profile/delete'); // delete complete profile student
});

