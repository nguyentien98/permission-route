<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'route_name'];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_permissions');
    }

    public function scopeGetRoutes($query)
    {
        return Permission::pluck('route_name')->toArray();
    }

    public function scopeSavePermission($query, $routes)
    {
        $untracked = array_diff(Permission::getRoutes(), $routes);
        if ($untracked) {
            foreach ($untracked as $value) {
                Permission::where('route_name', $value)
                ->first()
                ->roles()
                ->detach();
            }
            Permission::whereIn('route_name', $untracked)->delete();
        }
        $tracking = array_diff($routes, Permission::getRoutes());
        
        if ($tracking) {
            foreach ($tracking as $value) {
                Permission::create([
                    'route_name' => $value
                ]);
            }
        }
    }

    public function scopeName($query)
    {
        return $query->orderBy('route_name');
    }
}
