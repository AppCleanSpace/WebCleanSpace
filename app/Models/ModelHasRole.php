<?php

namespace App\Models;

use App\Models\Base\ModelHasRole as BaseModelHasRole;

class ModelHasRole extends BaseModelHasRole
{
	protected $fillable = [
		'role_id',
		'model_type',
		'model_id'
	];
}
