<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;



/**
 * Class RoleHasPermission
 * 
 * @property int $permission_id
 * @property int $role_id
 * 
 * @property \App\Models\Permission $permission
 * @property \App\Models\Role $role
 *
 * @package App\Models\Base
 */
class RoleHasPermission extends \Illuminate\Database\Eloquent\Model
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'role_id' => 'int'
	];

	public function permission()
	{
		return $this->belongsTo(\App\Models\Permission::class);
	}

	public function role()
	{
		return $this->belongsTo(\App\Models\Role::class);
	}
}
