<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bloog;
use App\Models\Role;



class User extends Model
{

	public function blogs()
    {
        return $this->hasMany(Bloog::class);
    }

	public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
