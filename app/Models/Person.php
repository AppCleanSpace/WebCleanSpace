<?php

namespace App\Models;

use App\Models\Base\Person as BasePerson;

class Person extends BasePerson
{
	protected $fillable = [
		'per_id2',
		'per_first_name',
		'per_last_name',
		'per_phone_num',
		'per_email',
		'per_type_id'
	];
}
