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
        $this->data['user'] = $user = User::where('id',$id)->first();
        $this->data['name'] = $name = $user->name;
        $this->data['email'] = $email = $user->email;
        $this->data['departments'] = $departments = DB::table('departments')->get();
        $this->data['programs'] = $programs  = Program::where('dept_id',$user->department)->get();
        $this->data['countries'] = $countries = Countries::all();
        $this->data['student'] = $student = Student::where('user_id',$id)->first();

        // $user  = auth()->user();
        // dd($user->student->photo);
        
        $country_id = $student->nationality_id ?? null;
        $this->data['country'] = $countries->where('id',$country_id)->first();
        // dd($this->data['country']->iso);
       
       
        return view('student_.profile',$this->data);
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
