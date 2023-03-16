<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLecture extends Model
{
    use HasFactory;
    protected $table = 'course_lectures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'course_id',
        'lecture_id',
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'course_id');
    }

    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecture_id', 'lecture_id');
    }
}
