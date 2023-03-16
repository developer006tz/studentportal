<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';
    protected $primary_key = 'semester_id';
    protected $fillable = ['semester_name', 'start_date', 'end_date', 'program_id'];
    protected $dates = ['start_date', 'end_date'];
    public $timestamps = true;

    public function program()
    {
        return $this->belongsTo(Program::class, 'prog_id');
    }
}
