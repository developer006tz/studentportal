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
        'fullname',
        'gender',
        'dob',
        'nationality',
        'maritual_status',
        'program_id',
        'year_of_study',
        'admission_id',
        'phone',
        'email',
        'password',
        'default_Password',
        'status',
        'photo',
    ];
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
    public function course()
    {
        return $this->hasMany(Course::class, 'course_id');
    }
    


}
