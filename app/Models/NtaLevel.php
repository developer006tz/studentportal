<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NtaLevel extends Model
{
    use HasFactory;
    protected $table = 'nta_levels';
    protected $fillable = ['nta_level_name', 'nta_level_description'];

    


}
