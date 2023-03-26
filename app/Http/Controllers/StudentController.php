<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use App\Models\Student;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{
    // index page student list
    public function student()
    {
        $studentList = Student::all();
        return view('student.student',compact('studentList'));
    }

    // index page student grid
    public function studentGrid()
    {
        $studentList = Student::all();
        return view('student.student-grid',compact('studentList'));
    }

    // student add page
    public function studentAdd()
    {
        return view('student.add-student');
    }
    
    /** student save record */
    public function studentSave(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'fullname'     => 'required|string',
            'admission_id'        => 'required|string',
            'gender' => 'required|string',
            'dob'        => 'required',
            'nationality'      => 'required|string',
            'maritual_status'         => 'required|string',
            'program_id'       => 'required|numeric',
            'email' => 'required|string|email|max:255|unique:users,email,'.auth()->user()->id,
            'phone' => 'required',
            'photo'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


            $dateString = $request->dob;
            $date = Carbon::createFromFormat('d-m-Y', $dateString);
            $formattedDate = $date->format('Y-m-d');

            // validate phone number
            $phone = $request->full_number;
            $full_number = str_replace(" ", "", $phone);
            if (substr($full_number, 0, 4) !== "+255") {
                $full_number = "+255" . substr($full_number, 1);
            }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            
            $extension = $file->getClientOriginalExtension();
            
            $filename = time().rand(4,999) . '.' . $extension;
            
            $file->move('uploads/student/', $filename);
        } else {
            $filename = 'default.png';
        }
        // check phone number is unique in users table
        $check_phone = User::where('phone',$full_number)->first();
        if($check_phone){
            Toastr::error('Phone number already exists', 'Error');
            return false;

        }
        
        DB::beginTransaction();
        try {
            $student = new Student;
            $student->user_id = auth()->user()->id;
            $student->fullname   = $request->fullname;
            $student->gender       = $request->gender;
            $student->dob          = $formattedDate;
            $student->nationality_id  = $request->nationality;
            $student->maritual_status     = $request->maritual_status;
            $student->program_id        = $request->program_id;
            $student->admission_id        = $request->admission_id;
            $student->phone      = $full_number;
            $student->email = $request->email;
            $student->photo = $filename;
            
            $save = $student->save();
            DB::commit();
            if($save){
                #update user table phone column to enter a student.phone int users table phone column
                $user = User::find(auth()->user()->id);
                $user->phone = $full_number;
                $save = $user->save();
            }

            return $save;
           
        } catch(\Exception $e) {

            $error = ($e->getMessage());
            DB::rollback();
            return $error;
        }
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('student.edit-student',compact('studentEdit'));
    }

    /** update record */
    public function studentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            if (!empty($request->upload)) {
                unlink(storage_path('app/public/student-photos/'.$request->image_hidden));
                $upload_file = rand() . '.' . $request->upload->extension();
                $request->upload->move(storage_path('app/public/student-photos/'), $upload_file);
            } else {
                $upload_file = $request->image_hidden;
            }
           
            $updateRecord = [
                'upload' => $upload_file,
            ];
            Student::where('id',$request->id)->update($updateRecord);
            
            Toastr::success('Has been update successfully :)','Success');
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, update student  :)','Error');
            return redirect()->back();
        }
    }

    /** student delete */
    public function studentDelete(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Student::destroy($request->id);
                unlink(storage_path('app/public/student-photos/'.$request->avatar));
                DB::commit();
                Toastr::success('Student deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Student deleted fail :)','Error');
            return redirect()->back();
        }
    }

    /** student profile page */
    public function studentProfile($id)
    {
        $studentProfile = Student::where('id',$id)->first();
        return view('student.student-profile',compact('studentProfile'));
    }
}
