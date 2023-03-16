<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $table = 'lectures';

    protected $primaryKey = 'lecture_id';

    protected $fillable = [
        'dept_id',
        'program_id',
        'full_name',
        'email',
        'phone',
        'password',
        'default_password',
        'status',
    ];

    protected $hidden = [
        'password',
        'default_password',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'dept_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id', 'program_id');
    }
}
