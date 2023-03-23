<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   protected $table = 'students';
   protected $primaryKey = 'student_id';
    protected $fillable = [
        'student_id',
        'user_id',
        'fullname',
        'gender',
        'dob',
        'nationality',
        'maritual_status',
        'program_id',
        'admission_id',
        'phone',
        'email',
        'status',
        'photo',
    ];
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
    public function departmentz()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
    public function course()
    {
        return $this->hasMany(Course::class, 'course_id');
    }

    public function countrie(){
        return $this->belongsTo(Countries::class);
    }

    public function user (){
        return $this->belongsTo(User::class);
    }
    


}
