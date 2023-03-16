<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'dept_id';
    protected $table = 'departments';
    protected $fillable = ['dept_code', 'dept_name'];

    public function Users()
    {
        return $this->hasMany(User::class);
    }
    

    
}
