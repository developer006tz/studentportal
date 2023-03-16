<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';
    protected $primaryKey = 'semester_id';
    protected $fillable = ['semester_name', 'start_date', 'end_date', 'program_id', 'academic_year_id'];
    protected $dates = ['start_date', 'end_date'];
    public $timestamps = true;

    public function program()
    {
        return $this->belongsTo(Program::class, 'prog_id');
    }
    public function academic_year()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
}
