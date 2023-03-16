<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    use HasFactory;
    protected $table = 'academic_years';
    protected $primaryKey = 'academic_year_id';
    protected $fillable = ['name', 'start_date', 'end_date'];
    protected $dates = ['start_date', 'end_date'];
    public $timestamps = true;

    public function semesters()
    {
        return $this->hasMany(Semester::class, 'academic_year_id');
    }
}
