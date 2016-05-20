<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany(Permission::class);
    }

    public function givePermissionTo($permission)
    {
    	if(is_string($permission))
    	{
    		$permission = Permission::whereName($permission)->firstOrFail();
    	}
    	return $this->permissions()->save($permission);
    }

    public function hasPermission($permission)
    {
    	if(is_string($permission))
    	{
    		return $this->permissions->contains('name', $permission);
    	}

    	return (bool) $permission->intersect($this->permissions)->count();
    }
}
