<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'department';
    protected $fillable = ['dept_code', 'dept_name'];

    // public function employees()
    // {
    //     return $this->hasMany(Employee::class);
    // }
    

    
}
