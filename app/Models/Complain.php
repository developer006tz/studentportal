<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $primaryKey = 'complaint_id';

    protected $fillable = [
        'student_id',
        'program_id',
        'dept_id',
        'lecture_id',
        'complain_type_id',
        'description',
        'solution',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function complaint_department()
    {
        return $this->belongsTo(Department::class);
    }

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }

    public function complainType()
    {
        return $this->belongsTo(ComplaintType::class);
    }
}
