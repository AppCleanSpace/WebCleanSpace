<?php

namespace App\Models;

use App\Models\Base\ModelHasPermission as BaseModelHasPermission;

class ModelHasPermission extends BaseModelHasPermission
{
	protected $fillable = [
		'permission_id',
		'model_type',
		'model_id'
	];
}
