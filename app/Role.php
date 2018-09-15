<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role_name'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'role_permissions');
    }

    public function getPermissions()
    {
        return $this->permissions()->pluck('id')->toArray();
    }
}
