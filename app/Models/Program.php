<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'programs';
    
    protected $primaryKey = 'program_id';
    
    protected $fillable = [
        'program_code',
        'program_name',
        'capacity',
        'nta_level_id',
        'dept_id',
    ];
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }
    
}
