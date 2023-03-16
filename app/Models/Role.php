<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_name',
        'role_description',
        'user_type',
    ];
    public $timestamps = true;

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'role_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    


}
