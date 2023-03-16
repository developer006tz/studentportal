<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplainType extends Model
{
    use HasFactory;
    protected $primaryKey = 'complain_type_id';

    protected $fillable = [
        'complain_type_name',
    ];

    public function complaints()
    {
        return $this->hasMany(Complain::class);
    }
}
