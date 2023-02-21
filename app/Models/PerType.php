<?php

namespace App\Models;

use App\Models\Base\PerType as BasePerType;

class PerType extends BasePerType
{
	protected $fillable = [
		'pt_name',
		'pt_description',
		'pt_rol_default_access',
		'pt_rate'
	];
}
