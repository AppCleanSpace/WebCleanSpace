<?php

namespace App\Models;

use App\Models\Base\RoleHasPermission as BaseRoleHasPermission;

class RoleHasPermission extends BaseRoleHasPermission
{
	protected $fillable = [
		'permission_id',
		'role_id'
	];
}
