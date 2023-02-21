<?php

namespace App\Models;

use App\Models\Base\ShiftUser as BaseShiftUser;

class ShiftUser extends BaseShiftUser
{
	protected $fillable = [
		'shift_sht_id',
		'user_id',
		'date_assig'
	];
}
