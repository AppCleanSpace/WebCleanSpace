<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\ModelHasRole[] $model_has_roles
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\RoleHasPermission[] $role_has_permissions
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 *
 * @package App\Models\Base
 */
class Role extends \Illuminate\Database\Eloquent\Model
{
	public function model_has_roles()
	{
		return $this->hasMany(\App\Models\ModelHasRole::class);
	}

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'role_has_permissions');
	}

	public function role_has_permissions()
	{
		return $this->hasMany(\App\Models\RoleHasPermission::class);
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'rol_id');
	}
}
