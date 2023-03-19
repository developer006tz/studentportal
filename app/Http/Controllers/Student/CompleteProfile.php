<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Models\Student;
use App\Models\Department;
use App\Models\Program;
use Brian2694\Toastr\Facades\Toastr;



/**
 * Class CompleteProfile
 * @package App\Http\Controllers\student
 */

/**
 * Summary of CompleteProfile
 */
class CompleteProfile extends Controller
{
    
    public function index(){
        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        $name = $user->name;
        $email = $user->email;
        $departments = DB::table('departments')->get();
        $programs  = Program::where('dept_id',$user->department)->get();
        $countries = Countries::all();
        
        
        
        return view('student_.profile',compact('user','departments','name','email','programs','countries'));
    }

    public function getPrograms(Request $request){
        $inputValue = $request->input('q');

        $results = DB::table('programs')
            ->select('program_id', 'program_code','program_name')
            ->where('program_code', 'like', '%' . $inputValue . '%')
            ->orWhere('program_name', 'like', '%' . $inputValue . '%')
            ->get();

        return response()->json($results);
    }

    /**
     * Summary of store
     * @param Request $request
     */
    public function store(Request $request)
    {
        
        $StudentController = new StudentController();
        $save = $StudentController->studentSave($request);

        if($save==1){
            Toastr::success('Profile Updated Successfully', 'Success');
            return redirect()->back();
        }else{
            
            Toastr::error($save, 'Error');
            return redirect()->back();
        }
}


}
