<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeDepartment extends Model
{
    use HasFactory;

    protected $table = 'programme_departments';

    protected $fillable = [
        'program_id',
        'dept_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
}
