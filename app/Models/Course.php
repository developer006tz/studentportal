<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'course_id';
    protected $table = 'courses';

    protected $fillable = [
        'course_code',
        'course_name',
        'credit',
        'elective',
        'dept_id',
        'program_id',
        'semester_id',
        'course_credit',
        'nta_level_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function ntaLevel()
    {
        return $this->belongsTo(NtaLevel::class, 'nta_level_id');
    }

}
